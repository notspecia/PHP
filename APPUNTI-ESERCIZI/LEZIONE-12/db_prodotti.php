
<?php

include_once './Prodotto.php';

// dati dei prodotti in formato JSON da un'API esterna (come esempio!)
$fakestore = file_get_contents('https://fakestoreapi.com/products');

// DECODIFICA il JSON ottenuto in --> un ARRAY di OGGETTI PHP
$fakestorePHP = json_decode($fakestore);
$prodotti = [];



foreach ($fakestorePHP as $objProdotto) {

    // creazione di un nuovo oggetto 'Prodotto' usando i dati dell'oggetto corrente
    $prodotto = new Prodotto($objProdotto->title, $objProdotto->image, $objProdotto->price);

    // aggiunta del prodotto appena creato dentro l'array $prodotti
    array_push($prodotti, $prodotto);
}
