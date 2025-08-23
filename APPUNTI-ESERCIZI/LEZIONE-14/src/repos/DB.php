<?php

class DB
{
    // definizione delle proprietà private per la connessione al database
    private string $host = "localhost";         // l'indirizzo del server del database
    private string $dbName = "prodotti";        // il nome del database
    private string $username = "prodottiUser";  // il nome utente per connettersi al database
    private string $password = "prodottiPwd";   // la password per connettersi al database
    private $conn;                              // la variabile che conterrà l'oggetto PDO per la connessione

    // metodo per ottenere la connessione al database
    public function getConnessione()
    {
        // inizializziamo la connessione a null per sicurezza
        $this->conn = null;

        try {
            // creiamo una nuova connessione PDO con i parametri di connessione
            $this->conn = new PDO(

                // creiamo la stringa di connessione (DSN) per un database MariaDB
                "mariadb:host=" . $this->host . ";dbname=" . $this->dbName,

                // inseriamo il nome utente e la password per la connessione
                $this->username,
                $this->password
            );

            // eseguiamo una query per impostare il set di caratteri a UTF-8
            $this->conn->exec("set name utf8");
        } catch (\PDOException $eccezione) {

            // gestiamo eventuali errori di connessione catturando l'eccezione PDOException
            echo "Connection error: " . $eccezione->getMessage();  // Stampa il messaggio di errore
        }
    }
}
