<!-- INTRODUZIONE agli array 
Un array in PHP è una struttura dati che può contenere più valori sotto un unico nome. 
Gli elementi di un array possono essere di diversi tipi:
come numeri, stringhe, altri array o anche oggetti, se contiene è valori diversi è detto ARRAY MISTO-->

<!-- gli array si possono inizializzare e creare in 2 diversi modi 
1. $variabile = array(1, false, 54 ...)
2. $variabile = [2, 4, "ciao", 3, array(4, 5.5, 8) ...] --->

<!-- per accedere ai valori degli array, usiamo la braket notation [index]
accedendo ai valori possiamo compiere varie operazioni:
$var = [2, "ciao", 6, true, 7.5];

1. echo $var[0] -> andiamo a stampare 2
2. $var[2] = "mondo" -> andiamo a modificare il 6 e ora è "mondo"
3. $var[] = 199 -> Aggiunge il valore 199 alla fine dell'array, e PHP assegna automaticamente l'indice appropriato. -->


<!-- ARRAY ASSOCIATIVI, sono un tipo speciale di array in cui ogni elemento è associato a una chiave univoca 
invece di un indice numerico.
Le chiavi degli array associativi possono essere stringhe o numeri, mentre i valori possono essere di qualsiasi tipo di dato.
$var = ["nome" => "gabriele", "eta" => 19]  
per accedere a un valore dell'array, funziona come gli array normali con la bracket []
ma al suo interno inseriamo il nome della chiave-->




<!-- andiamo a testare i vari modi di 
inizializzazione, accessione, stampa, modifica, degli array -->
<?php

$voti = array(28, 25, 26, 27, 18, 19, 30, 28);
$voti2 = [28, 25, 26, 27, 18, 19, 30, 28];

$voti[2] = 30; // andiamo a modificare la 3 posizione di $voti
echo $voti2[5], "<br/> <br/>"; // stampiamo la 5 posizione di $voti2

// stampiamo partendo dal fondo dell'array con questo algoritmo
for ($i = count($voti) - 1; $i >= 0; $i--) {
    echo " ", $voti[$i];
}

// metodo + intelligente e rapido per stampare 
foreach ($voti2 as $voto) {
    echo $i++ . ': ' . $voto . '<br>';
}

?>

<br />
<br />




<!-- andiamo a creare un array associativo, e confrontiamolo con
l'array normale, proviamo a stampare e modificare -->
<?php

// array normale
$zaino = ["string", 12, 13.4, true, [1, 2, 3]];

// array associativo
$materieVoti = ["storia" => 9, "matematica" => 7, "inglese" => 10];

// array normale, contenente degli array associativi
$temperature = [
    ["citta" => "torino", "temp" => 23.5],
    ["citta" => "milano", "temp" => 22.5],
    ["citta" => "napoli", "temp" => 21.5],
    ["citta" => "roma", "temp" => 25.5],
];

// test di stampa di una parte dei vari array
echo $zaino[4][1] . '<br>'; //output: 2
echo $materieVoti["matematica"] . '<br>'; // output 7
echo $temperature[3]["temp"] . '<br>'; // output 25.5

// test di modifica di una parte dei vari array
$zaino[1] = 400;

$materieVoti["storia"] = 6;
echo $materieVoti["storia"]. '<br>';

$temperature[2]["citta"] = "Umbria"; 
echo $temperature[2]["citta"];
?>