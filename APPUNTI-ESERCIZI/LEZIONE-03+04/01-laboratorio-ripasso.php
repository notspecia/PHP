<!-- RIPASSO DEGLI ARRAY, SLIDE COMPLETE:
http://www.bogliaccino.it/teaching/slideshow.php?parameter=https://raw.githubusercontent.com/maboglia/CorsoPHP/master/appunti/03_array.md#1 -->



<?php

/* array super globali:
http://www.bogliaccino.it/teaching/slideshow.php?parameter=https://raw.githubusercontent.com/maboglia/CorsoPHP/master/appunti/080_Superglobals.md#1*/



// array scalari
$frutti = ["mela", "banana", "uva", "zenzero"];

// aggiungiamo un valore infondo all'array
$frutti[4] = "caco";

// stampa di quanti valori sono presenti nell'array
$quantiFrutti = count($frutti);

echo $quantiFrutti . "<br>";

// cicli for, utilizzati per scorrere gli array
for ($i = 0; $i < $quantiFrutti; $i++) {
    echo $frutti[$i] . "<br>";
}

echo "<br>" . "<br>" . "<br>";

// ciclo foreach, il secondo parametro si riferisce al 1 parametro
foreach ($frutti as $frutto) {
    echo $frutto . "<br>";
}





echo "<br>" . "<br>" . "<br>";





// array matrice (contiene + array)
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





// array associativi, la chiave è una parola
$regioni = [
    "Piemonte" => "Torino",
    "Lombardia" => "Milano",
    "Lazio" => "Roma",
    "Sicilia" => "Palermo"
];

// stampiamo un singolo valore di una chiave
echo $regioni["Piemonte"] .  "<br>" . "<br>";

// Aggiungiamo una nuova chiave e il suo valore all'array associativo
$regioni["Campania"] = "Napoli";

// Iteriamo su ogni elemento dell'array associativo e stampiamo la chiave e il valore
foreach ($regioni as $key => $value) {
    echo $key . " " . $value . "<br>";
}



/* legge il contenuto del file "regioni.txt" e lo memorizza in un array,
 dove ogni elemento dell'array rappresenta una riga del file.*/
$mioFile = file("01-regioni.txt");
echo $mioFile;
// itera attraverso ogni riga del file.
foreach ($mioFile as $riga) {
    
    // Divide la riga in un array di parole, utilizzando la virgola come delimitatore.
    // Supponendo che ogni riga abbia un formato come "chiave,valore".
    $parole = explode(",", $riga);
    
    // Chiama la funzione 'addRegione' passando un array associativo con una singola chiave-valore.
    // $parole[0] rappresenta la chiave (prima parola prima della virgola),
    // $parole[1] rappresenta il valore (seconda parola dopo la virgola).
    // addRegione([$parole[0] => $parole[1]]);

    // foreach ($regioni as $key => $value) {
//     echo $key .": ". $value .'<br>';
// }


// foreach ($_POST as $key => $value) {
//     echo $key .": ". $value .'<br>';
// }

// echo "<pre>";
// var_dump($regioni);
// echo "</pre>";


echo json_encode($regioni);
}


?>