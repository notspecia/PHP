<?php

namespace App\Models;



/**
 * Classe User
 * 
 * questa classe rappresenta il modello per la gestione degli utenti nel database,
 * fornisce metodi per l'interazione con la tabella "users", inclusi la creazione di nuovi utenti
 * e la lettura dei dati di un utente specifico basato sul nome utente, utilizza PDO per interagire con il database.
 */
class User
{

    private static $db;
    private static $table = "users"; // tabella da cui leggere/scrivere i dati


    /**
     * Costruttore della classe User
     * prende la connessione PDO e la assegna alla proprietà statica $db.
     * 
     * @param $dbInstance istanza del database PDO
     */
    public function __construct($dbInstance)
    {
        self::$db = $dbInstance;
    }



    /**
     * 01. Metodo che legge i dati di un utente dal database in base al nome utente fornito,
     * se l'utente esiste, restituisce i suoi dati, altrimenti restituisce null.
     * 
     * @param string $username Il nome utente da cercare nel database.
     * @return array|null dati dell'utente o null se non trovato.
     */
    public static function readByUsername($username)
    {
        try {
            // prepara la query per selezionare l'utente in base al nome utente
            $stmt = self::$db->prepare('SELECT * FROM ' . self::$table . ' WHERE username = :username');
            $stmt->execute(['username' => $username]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            // se non viene trovato alcun risultato, ritorna null
            if (!$result) {
                return;
            }


            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }



    /**
     * 02. Metodo che crea un nuovo record utente nella tabella "users" nel database.
     * 
     * @param array $data Dati dell'utente (username, password, email).
     * @return bool|string restituisce true se l'inserimento ha avuto successo, altrimenti restituisce un messaggio d'errore.
     */
    public static function createUser($data)
    {
        try {
            // query per l'inserimento di una nuovo user
            $stmt = self::$db->prepare('INSERT INTO ' . self::$table . ' (username,password,email) VALUES (:username, :password, :email)');
            $result = $stmt->execute([
                'username' => $data["username"],
                'password' => $data["password"],
                'email' => $data["email"],
            ]);

            if (!$result) {
                return;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }
}