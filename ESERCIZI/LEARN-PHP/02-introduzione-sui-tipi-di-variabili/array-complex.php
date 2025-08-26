<!-- RIPASSO DEGLI ARRAY, SLIDE COMPLETE:
http://www.bogliaccino.it/teaching/slideshow.php?parameter=https://raw.githubusercontent.com/maboglia/CorsoPHP/master/appunti/03_array.md#1 -->



<?php

/* array super globali:
http://www.bogliaccino.it/teaching/slideshow.php?parameter=https://raw.githubusercontent.com/maboglia/CorsoPHP/master/appunti/080_Superglobals.md#1*/


//? 01. array normali
$frutti = ["mela", "banana", "uva", "zenzero"];

// aggiungiamo un valore infondo all'array
$frutti[4] = "caco";


//01. cicli for, utilizzati per scorrere gli array
for ($i = 0; $i < count($frutti); $i++) {
    echo $frutti[$i] . "<br>";
}

//02. ciclo foreach, il secondo parametro si riferisce al 1 parametro
foreach ($frutti as $frutto) {
    echo $frutto . "<br>";
}




echo "<br>" . "<br>" . "<br>";





//? 02. array matrice multidimensionali (contiene + array) 
$matrice = [
    [1, true, 2, 3],
    [4, false, 5, "addio"]
];

// aggiungiamo un array al fondo alla matrice
$matrice[] = ["zoo", 7, 8];

// per scorrere le matrici, innestiamo un ciclo for dentro un altro
for ($i = 0; $i < count($matrice); $i++) {

    for ($j = 0; $j < count($matrice[$i]); $j++) {
        echo $matrice[$i][$j] . "<br>";
    }
}




echo "<br>" . "<br>" . "<br>";





//? 03. array associativo, la chiave è una parola
$regioni = [
    "Piemonte" => "Torino",
    "Lombardia" => "Milano",
    "Lazio" => "Roma",
    "Sicilia" => "Palermo"
];

// stampiamo un singolo valore di una chiave
echo $regioni["Piemonte"] .  "<br>" . "<br>";

// aggiungiamo una nuova chiave e il suo valore all'array associativo
$regioni["Campania"] = "Napoli";

// per ciascun elemento dell'array associativo e stampiamo la chiave e il valore
// $regione -> KEY
// $citta -> VALUE
foreach ($regioni as $regione => $citta) {
    echo $regione . " " . $citta . "<br>";
}

?>