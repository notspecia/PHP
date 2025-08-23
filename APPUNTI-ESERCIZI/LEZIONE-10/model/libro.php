<?php

class libro
{
    // le proprietà devono essere incapsulate per garantire l'integrità dei dati
    private $id;
    private $titolo;
    private $pagine;
    private $prezzo;
    private $autore;

    
    // costruttore della classe che inizializza il titolo del libro
    public function __construct($titolo)
    {
        $this->titolo = $titolo;
    }


    // metodo magico __get per accedere alle proprietà private
    public function __get($nomeProprieta)
    {
        return $this->$nomeProprieta;
    }

    // metodo magico __set per impostare il valore delle proprietà private
    public function __set($nomeProprieta, $nuovoValoreProp)
    {
        $this->$nomeProprieta = $nuovoValoreProp;
    }

    // metodo magico __toString per rappresentare l'oggetto come una stringa
    public function __toString()
    {
        return "titolo: " . $this->titolo . " autore: " . $this->autore;
    }

}
