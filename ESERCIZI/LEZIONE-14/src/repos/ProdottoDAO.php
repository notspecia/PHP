<?php

namespace SP\repos;

use SP\repos;

include_once "../src/repos/DB.php";

use SP\repos\DB;


class ProdottoDAO
{
    private $connessione;
    private string $tabella;



    public function __construct($connessione = null)
    {
        if ($connessione == null) {
            $db = new DB();
            $connessione = $db->getConnection();
        }
        $this->connessione = $connessione;
    }


    public function read()
    {
        $query = "SELECT * FROM prodotti" . $this->tabella;

        $statement = $this->connessione->prepare($query);

        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_CLASS, "Prodotto");
        $prodotti[] = $prodotto;
    }


    public function create($prodotto)
    {
        $query = "INSERT INTO {$this->tabella} (nome, descrizione, prezzo)
        VALUES  (:nome, :descrizione, :prezzo)";

        $statement = $this->connessione->prepare($query);
        $statement->bindParam(":nome", \htmlspecialchars($prodotto->getNome()));
        $statement->bindParam(":descrizione", \htmlspecialchars($prodotto->getDescrizione()));
        $statement->bindParam(":prezzo", \htmlspecialchars($prodotto->getPrezzo()));

        if ($statement->execute()) {
            return true;
            return false;
        }
    }
}
