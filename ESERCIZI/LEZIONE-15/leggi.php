<?php

// 01. nome del FILE (docs) in cui leggere i dati (prodotti.txt)
// 02. -> file contentente libri
$myFile = "https://raw.githubusercontent.com/maboglia/ProgrammingResources/refs/heads/master/tabelle/libri/Biblioteca.csv";


// // Apre il file in modalità lettura ("r" per leggere)
// $fh = fopen(filename: $myFile, mode: "r");

// // Legge il contenuto del file, la dimensione del file è ottenuta tramite filesize(
// $leggo = fread(stream: $fh, length: filesize(filename: $myFile));

// // Chiude il file dopo averlo letto
// fclose(stream: $fh);
// echo $leggo;



//! -------------------------------------------------------------------------------------------------



$editore = "Mondadori";

function scrivi($filedascrivere, $stringadascrivere)
{
    $risorsa = fopen($filedascrivere, 'a');

    fwrite($risorsa, $stringadascrivere);

    fclose($risorsa);
}


/*La funzione file() --> legge tutto il contenuto del file e lo RESTITUISCE come ARRAY,
dove ogni elemento dell'array rappresenta una riga del file */
$miofile = file($myFile);

foreach ($miofile as $riga) {
    echo $riga;

    if (str_contains($riga, $editore)) {
        scrivi('./docs/' . $editore . '.txt', $riga);
    }
}

// Vediamo la struttura e il contenuto dell'array generato con --> var_dump()
// var_dump(value: $miofile);
