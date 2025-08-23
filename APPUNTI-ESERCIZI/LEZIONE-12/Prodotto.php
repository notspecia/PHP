<?php

// classe utilizzata per creare il prodotto
class Prodotto
{

    // proprietà (private) per memorizzare il nostro prodotto
    private string $title;
    private string $image;
    private float $price;

    // costruttore per inizializzare le proprietà del prodotto
    public function __construct($title, $image, $price)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }


    // METODI PER OTTENERE I PARAMETRI DEL PRODOTTO (titolo, immagine, prezzo)
    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }
}