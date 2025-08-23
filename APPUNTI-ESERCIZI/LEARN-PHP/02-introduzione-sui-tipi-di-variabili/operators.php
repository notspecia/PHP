<!-- INTRODUZIONE agli operatori 
operatori aritmetici: +, -, *, /, %
operatori di assegnazione: =
operatori combinati di assegnazione: +=, -=, *=, /=, %=
operatori di incremento o decremento: ++, --
operatori di confronto: ==, !=, ===,  >, <, >= ...
operatori logici: &&(and), ||(or), !(not)
operatori bitwhise: per i numeri binari -->

<!-- gli operatori di confronto e logici sono utilizzati per prendere decisioni nel codice PHP, consentendo di eseguire operazioni condizionali. 
illustriamo l'uso di vari operatori di confronto e logici, oltre all'uso di funzioni come isset() e empty().  -->


<!-- isset($variabile): è una funzione che verifica se la $variabile 
è stata definita e NON è null. 
!isset($variabile): NEGAZIONE. Verifica se $variabile non è stata definita o è null-->


<!-- empty($variabile): Funzione che verifica se $variabile è vuota. 
Restituisce true nei casi per valori "vuoti" come:
"", "0", 0, 0.0, null, false, array() -->






<!-- andiamo ad usare degli operatori logici e di confronto -->
<?php

$var1 = 15;
$var2 = 10;
$var3 = 3;
$var4 = 20;
if (($var1 >= $var2) || ($var4 >= $var3)) {
    echo "var1 is larger than var2 <br />(OR) <br />";
    echo "var4 is larger than var3";
}

?>


<br />
<br />


<!-- andiamo ad usare la funzione citata precedentemente
!isset($var5), andiamo a mettere la condizione che se $var NON (!) è stata definita -->
<?php

$var5 = 32;
// se la $variabile non è settata, andiamo ad assegnare un valore
if (!isset($var5)) {
    $var5 = 200;
}
echo $var5;

?>


<br />


<!-- andiamo ad utilizzare le funzioni citate precedentemente
empty($variabile), verifica se $variabile è vuota e (&&) !is_numeric($variabile) se NON è un numero -->
<?php

$var6 = "";

if (empty($var6)) {
    echo "You must enter a quantity. <br />";
}

// la condizione prevede che la variabile debba essere vuoto e che non sia di tipo number
if (empty($var6) && !is_numeric($var6)) {
    echo "You must enter a quantity and the value must be not a NUMBER.";
}

?>