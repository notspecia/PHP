<!-- sono blocchi di codice riutilizzabili + volte ad esempio mangiare, mangiamo ogni giorno -->

<?php

//! 01. funzione riutilizzabile 
function nutritsi()
{
    echo "ciao sto mangiando <br>";
}

// evocazione (invoce call) della funzione
nutritsi();



//! 02. funzione anonima (no nome alla funzione) va il ; alla fine!!
$prova = function () {
    echo "ciao mi chiamo Gabriele <br>";
};

// evocazione (invoce call) della funzione anonima
$prova();



//! 03. scope delle funzioni (in php ha uno scope interno) ma usando $GLOBALS[], ci permette di usare variabili fuori dallo scope della funzione
$saluti = "ciao a turututti";

// per prendere $saluti anche se è stato definito fuori dalla funzione, usare $GLOBALS["saluti"];
function salutaTutti()
{
    echo $GLOBALS["saluti"] . "<br>";
}

salutaTutti();



//! 04. passare alle funzioni degli argomenti al posto di usare $GLOBALS[], o anche usare dei parametri di default in caso non venga passato nulla
$numeroUno = 4;
$numeroDue = 5;

function somma($numeroUno, $numeroDue = 90)
{
    echo $numeroUno + $numeroDue . "<br>";
}

somma($numeroUno, $numeroDue);



//! 05. Il return in una funzione viene utilizzato per restituire un valore al chiamante della funzione
//! 06. Il return type specifica il TIPO DI DATO che una funzione deve restituire (:int / :string...)

// se mettero come type di return, int (in questo caso) mi darà errore dato che restituisco una stringa
function viaggio($nome, $destinazione): string
{
    return $nome . " è andato in " . $destinazione . "<br>";
}

// la variabile avrà come valore di ritorno la stringa composta nella funzione
$raccontoViaggio = viaggio("Mauro", "Giappone");
echo $raccontoViaggio;

?>