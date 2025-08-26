<?php

// Definizione della classe Punto
class Punto
{
    // Proprietà pubbliche per le coordinate x e y
    public $x, $y;


    /* Costruttore della classe Punto
    Viene chiamato quando viene creata una nuova istanza della classe */
    public function __construct($x = 0, $y = 0)
    {
        // Inizializza la proprietà x con il valore passato come parametro
        $this->x = $x;

        // Inizializza la proprietà y con il valore passato come parametro
        $this->y = $y;
    }


    /* Metodo __toString() per convertire l'oggetto in una stringa
    Viene chiamato automaticamente quando si tenta di trattare l'oggetto come una stringa */
    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . ")";
    }
}
