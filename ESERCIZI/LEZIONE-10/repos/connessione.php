<?php

class Connessione
{
    // informazioni/dati fondamentali per accedere al DB
    private const DB_name = "webdev";
    private const HOST = "mysql:host=localhost:3306;dbname=" . self::DB_name;
    private const USER = "root";
    private const PASS = "";

    // variabile che conterrà la connessione al database
    private $conn = null;



    // metodo pubblico per ottenere la connessione
    public function getConn()
    {
        if ($this->conn == null) {
            $this->connetti();

            return $this->conn;
        }
    }


    // metodo per stabilire una connessione tra PHP e un database server
    private function connetti()
    {
        try {
            // creazione di una nuova istanza PDO per la connessione al database
            $this->conn = new PDO(self::HOST, self::USER, self::PASS);
            // messaggio di successo se la connessione viene stabilita
            echo "CONNESSIONE STABILITA, sei collegato!";
        } catch (PDOException $eccezione) {
            // gestione delle eccezioni in caso di fallimento della connessione
            echo "CONNESSIONE FALLITA, non sei collegato!" . $eccezione->getMessage();
        }
    }

}
