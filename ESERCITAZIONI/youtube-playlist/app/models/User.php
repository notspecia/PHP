<?php

namespace App\Models;

use PDO;

class User
{
    private static $db;
    private static $table = "users";  // Nome della tabella utenti

    // Inietta la connessione PDO
    public function __construct($dbInstance)
    {
        self::$db = $dbInstance;
    }

    /**
     * Trova un utente per username.
     *
     * @param string $username
     * @return array|false
     */
    public static function findByUsername($username)
    {
        try {
            $stmt = self::$db->prepare("SELECT * FROM " . self::$table . " WHERE username = :username");
            $stmt->execute(['username' => $username]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return false; // Restituisce false in caso di errore
        }
    }

    /**
     * Verifica le credenziali dell'utente.
     *
     * @param string $username
     * @param string $password
     * @return array|false Restituisce l'utente se le credenziali sono valide, altrimenti false.
     */
    public static function verifyCredentials($username, $password)
    {
        $user = self::findByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Restituisce i dettagli dell'utente se le credenziali sono valide
        }

        return false; // Restituisce false se le credenziali non sono valide
    }

    /**
     * Ottieni i dettagli del profilo dell'utente.
     *
     * @param int $id
     * @return array|false
     */
    public static function getProfile($id)
    {
        try {
            $stmt = self::$db->prepare("SELECT username, email FROM " . self::$table . " WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return false; // Restituisce false in caso di errore
        }
    }
}
