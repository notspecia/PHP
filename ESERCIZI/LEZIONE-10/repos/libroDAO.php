<?php

include_once "../model/libro.php";
include_once "../repos/connessione.php";

class libroDAO
{

    private $connessione;

    private $miaConn;




    public function __construct()
    {
        $this->connessione = new Connessione();
        $this->miaConn = $this->connessione->getConn();
    }

    public function addlibro(libro $libro)
    {
        $query = "INSERT INTO libri (titolo, pagine, prezzo, autore) values(:titolo, :pagine, :prezzo, :autore)";

        $statement = $this->miaConn->prepare($query);
        $statement->bindParam(':titolo', $libro->titolo, PDO::PARAM_STR);
        $statement->bindParam(':pagine', $libro->pagine, PDO::PARAM_STR);
        $statement->bindParam(':prezzo', $libro->prezzo, PDO::PARAM_STR);
        $statement->bindParam(':autore', $libro->autore, PDO::PARAM_STR);

        $statement->execute();
    }





    public function getLibri(libro $libro)
    {
        $query = "SELECT * FROM libri";
        $resultSet = $this->miaConn->query($query);

        $libri = [];
    }

    public function getLibroById($id)
    {
    }
}
