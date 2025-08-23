<?php

include 'punto.php';

class Segmento
{

    public $a, $b;

    /* Costruttore della classe Segmento
    Inizializza le proprietà a e b con istanze di Punto */
    public function __construct($a = new Punto(), $b = new Punto())
    {

        // Inizializza la proprietà a e b con il valore passato come parametro
        $this->a = $a;
        $this->b = $b;
    }

    // Metodo per calcolare la lunghezza del segmento
    public function lunghezza()
    {
         // Calcola la distanza tra i punti a e b
        return sqrt(pow($this->a->x - $this->b->x, 2) + pow($this->a->y - $this->b->y, 2));;
    }
}



// Creazione di nuove istanze della classe Punto
$a = new Punto(2, 1);
$b = new Punto(6, 1);
$c = new Punto(2, 4);

// Creazione di nuove istanze della classe Segmento con i punti creati
$ab = new Segmento($a, $b);
$ac = new Segmento($a, $c);
$bc = new Segmento($b, $c);

// Stampa della lunghezza del segmento bc
echo $bc->lunghezza();
