<?php

// includiamo il file che produce il libro in questo file
include_once '../model/Libro.php';


class Libreria
{

    private $libri = [];
    public function __construct() {}


    public function addLibro(Libro $libro): void
    {
        $this->libri[] = $libro;
    }


    public function getLibri()
    {
        return $this->libri;
    }


    public function getLibroByTitolo(string $titolo): ?Libro
    {

        foreach ($this->libri as $libro) {
            if ($libro->getTitolo() == $titolo)
                return $libro;
        }
        return null;
    }
}