<?php

// Recupero la richiesta dal FormData mandato dal frontend con header POST (ossia il nome del file json da leggere POKDEX / COLORS)
$richiesta = $_POST['data'] ?? null;

// Leggo e prendo il contenuto del file JSON passato dalla richiesta ( prendiamo il file json/*.json )
$strJsonFileContents = file_get_contents("./json/$richiesta.json");

// Creazione un array associativo con json_decode
$arrayData = json_decode($strJsonFileContents, true);

/* 
QUANDO INVIAMO UN JSON AL FRONTEND CON PHP e per mandarlo correttamente --> USARE  echo
Invio direttamente il JSON al client 
*/
echo json_encode($arrayData);


/*
$strJsonFileContents = file_get_contents("./json/$richiesta.json");
$arrayData = json_decode($strJsonFileContents, true);

Quando si avrà un DB, non ci sarà più bisogno di file_get_contents e json_decode.
Perché?
    - Non leggerai più un file JSON.
    - I dati arriveranno già dal database come array o oggetti PHP (risultato di una query).
 */