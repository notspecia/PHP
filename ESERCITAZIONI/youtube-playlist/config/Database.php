<?php

namespace Config;

class Database
{
    // creazione degli attributi di connessione dichiarati come statici
    private $host = 'localhost';
    private $db_name = 'youtube_playlist';
    private $username = 'root';
    private $password = '';
    public  $conn;

    // metodo per ottenere la connessione al database
    public function getConnection()
    {
        // se la connessione NON è stata ancora creata, la si crea
        $this->conn = null;
        try {
            // creazione di una nuova connessione PDO
            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            // in caso di errore viene mostrato il messaggio da SQL di errore
        } catch (\PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        // si ritorna la connessione (sia che sia stata appena creata, sia che fosse già esistente)
        return $this->conn;
    }
}
