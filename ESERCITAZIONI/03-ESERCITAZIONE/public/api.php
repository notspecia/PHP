<?php

require '../vendor/autoload.php';
include '../src/view/header.php';


// use App\model\Prodotto;

// $prodotto = new Prodotto('phon', 10);

// var_dump($prodotto);

// use App\database\Connessione;

// $connessione = new Connessione();

// $connessione->getConnection();

use App\controller\ItemController;

$ctrl = new ItemController();

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $prodotto = file_get_contents("php://input");
    echo json_decode($prodotto);
}

if ($method === "GET") {
    $ctrl->read();
}
