<?php

//! nome del FILE (docs) in cui scrivere i dati
$myFile = "prodotti.txt";

// Apre il file in modalità scrittura ("w" crea il file se non esiste, o lo sovrascrive se esiste)
$fh = fopen(filename: $myFile, mode: "w");


// Prima frase da scrivere nel file: "maglia rossa, 10" seguita da un a capo
$frase1 = "maglia rossa, 10\n";
fwrite(stream: $fh, data: $frase1);


// Seconda frase da scrivere nel file: "cappello blu, 12" seguita da un a capo
$frase2 = "ciaone ho cappello blu 12\n";
fwrite(stream: $fh, data: $frase2);


// Chiude il file, salvando le modifiche
fclose(stream: $fh);
