<!-- INTRODUZIONE alle stringhe
Le stringhe sono sequenze di caratteri, come lettere, numeri, simboli e spazi -->

<!-- si possono includere le stringhe nel doppio apice -> "ciao "
o anche nei singoli apici -> 'ciao' -->

<!-- per concatenare le stringhe in PHP utilizziamo il .
può essere anche concatenata la stessa $variabile con un altro pezzo -> .= str  -->

<!-- interpolazione delle stringhe, se includiamo all'interno degli apici una $variabile con echo:
1. con i singoli apici stamperà letteralmente '$variabile' 
2. con i doppi apici stamperà il valore della $variabile "$variabile(value)"
3. utilizzo delle {$variabile} la variabile rendendo esplicita l'interpolazione -->




<!-- proviamo a stampare tra apici singoli e doppi, direttamente con echo
proviamo anche a concatenare 2 $variabili contenenti valori di tipo string, in un unica $variabile -->
<?php

echo "Hello World<br />";
echo 'Hello World<br />';

$str1 = "Ciao";
$str2 = "Mondo!";
$phrase = $str1 . " " . $str2;
echo $phrase;
?>

<br />
<br />

<?php

echo "$phrase ,riproviamo<br />";
echo '$phrase ,riproviamo<br />';
echo "{$phrase}, riproviamo<br />";

?>