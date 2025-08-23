<?php

namespace App\Controllers;

use App\Models\User;



/**
 * Classe UserController
 * 
 * Questo controller gestisce le operazioni di autenticazione + registrazione degli utenti,
 * contiene metodi per la: creazione di utenti, la verifica delle credenziali di accesso e la gestione della sessione.
 */
class UserController
{
    /**
     * Metodo privato createHashPassword, crea un hash sicuro della password usando la funzione password_hash di PHP.
     * 
     * @param string $password la password in chiaro.
     * @return string restituisce la password hashata.
     */
    private function createHashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }



    /**
     * Metodo privato redirectView
     * 
     * Gestisce il reindirizzamento dell'utente a una vista specifica.
     * 
     * @param array $response L'array con eventuali messaggi o errori.
     * @param string $uri L'URI verso cui l'utente deve essere reindirizzato.
     */
    private function redirectView($response, $uri)
    {
        header("Location: " . $uri);
    }



    /**
     * Metodo pubblico verifyUser verifica le credenziali dell'utente confrontando 
     * il nome utente e la password con i dati salvati nel database.
     * se le credenziali sono corrette, imposta la sessione e reindirizza alla home, altrimenti, reindirizza alla pagina di login.
     */
    public function verifyUser()
    {
        session_start();

        // recupera i dati dell'utente in base al nome utente
        $userData = User::readByUsername($_POST["username"]);

        // verifica se l'utente esiste e se la password è corretta
        if ((!empty($userData) && !is_string($userData)) &&
            password_verify($_POST["password"], $userData["password"])
        ) {
            // Imposta l'ID utente nella sessione e reindirizza alla home se l'autenticazione ha successo
            $_SESSION["user_id"] = $userData["id"];
            header("Location: /youtube-playlist/");
        } else {
            // altrimenti, reindirizza alla pagina di login se le credenziali sono errate
            header("Location: /youtube-playlist/login");
        }
    }



    /**
     * Metodo pubblico logout che termina la sessione utente eliminando i dati di sessione e reindirizza alla home.
     */
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        // reindirizzamento alla home
        header("Location: /youtube-playlist/");
        exit();
    }



    /**
     * Metodo pubblico createUser che permette di creare un nuovo utente nel database, 
     * raccoglie i dati dal corpo della richiesta o dai dati POST.
     * Se l'utente viene creato con successo, reindirizza alla pagina di login, altrimenti, mostra un errore.
     */
    public function createUser()
    {
        // recupera i dati JSON dalla richiesta
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        // recupera la password dal JSON o dai dati POST
        $password = $inputData['password'] ?? $_POST["password"];

        // preparazione dei dati dell'utente
        $data = [
            'username' => $inputData['username'] ?? $_POST['username'] ?? null,
            'password' => $this->createHashPassword($password), // Hasha la password
            'email' => $inputData['email'] ?? $_POST['email'] ?? null,
        ];

        // verifica che tutti i campi obbligatori siano presenti
        if (!empty($data['username']) && !empty($data['password']) && !empty($data['email'])) {

            $playlist = User::createUser($data);

            // Gestione degli errori o conferma della creazione
            if (empty($playlist)) {
                $this->redirectView(['error' => 'error during creation'], "/youtube-playlist/register");
            } elseif (is_string($playlist)) {
                $this->redirectView(['error' => 'error in database'], "/youtube-playlist/register");
            } else {
                $this->redirectView(['message' => 'user created'], "/youtube-playlist/login");
            }
        } else {
            // se mancano dei campi, reindirizza alla pagina di registrazione
            $this->redirectView(['error' => 'missing required fields'], "/youtube-playlist/register");
        }
    }
}
