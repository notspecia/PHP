<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    /**
     * Effettua il login dell'utente.
     *
     * @param string $username
     * @param string $password
     * @return array
     */
    public function login($username, $password)
    {
        $user = User::verifyCredentials($username, $password);

        if ($user) {
            // Avvia la sessione e memorizza i dati dell'utente
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            return ['message' => 'Login effettuato con successo!'];
        }

        return ['error' => 'Username o password non validi.'];
    }

    /**
     * Effettua il logout dell'utente.
     *
     * @return array
     */
    public function logout()
    {
        session_start();
        session_destroy(); // Distrugge la sessione
        return ['message' => 'Logout effettuato con successo!'];
    }

    /**
     * Mostra il profilo dell'utente.
     *
     * @return array
     */
    public function showProfile()
    {
        session_start();

        if (isset($_SESSION['user_id'])) {
            return User::getProfile($_SESSION['user_id']);
        }

        return ['error' => 'Utente non autenticato.'];
    }
}