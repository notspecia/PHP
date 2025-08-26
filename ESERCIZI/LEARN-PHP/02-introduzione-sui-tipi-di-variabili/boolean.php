<!-- INTRODUZIONE AI VALORI BOOLEAN
Un booleano rappresenta un valore di verità, 
che può essere true (vero) o false (falso). -->

<!-- il valore booleano true che viene stampato è convertito in 1 
il valore booleano false che viene stampato è convertito in uno spazio vuoto-->

<!-- is_bool($variabile): verifica se $variabile è un booleano. 
Restituisce 1 (vero) se è un booleano, altrimenti restituisce " "(falso) 

può essere usata anche per verificare TUTTE le tipologie di $variabili:
is_float(), is_string(), is_int(), is_null() ...-->





<!-- andiamo ad assegnare i 2 valori booleani a 2 variabili -->
<?php

$var1 = true;
$var2 = false;

echo $var1, "<br />"; //output 1
echo $var2, "<br />"; // output ""(spazio vuota)
echo "<br />";

?>


<!-- andiamo ad assegnare una valore alla $var1, e tramite
la funzione is_bool(), decretiamo se essa lo è oppure no -->
<?php

$var1 = false;
if (is_bool($var1)) {
	echo "la variabile ($var1) è un booleano";
} else {
	echo "la variabile ($var1) non è un booleano";
}

/*andiamo ad assegnare una valore alla $var2, e tramite
la funzione is_string(), decretiamo se essa lo è oppure no
*/
echo "<br />";
$var2 = 32;
if (is_string($var2)) {
	echo "la variabile ($var2) è una stringa";
} else {
	echo "la variabile ($var2) non è una stringa";
}

?>