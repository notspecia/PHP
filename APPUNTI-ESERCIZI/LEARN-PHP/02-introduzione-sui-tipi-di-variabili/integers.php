<!-- per lavorare con i numeri interi, PHP fornisce una vasta gamma di funzioni e operatori 
andremo a vedere in questo file:
1. operazioni matematiche di base
2. l'uso delle funzioni matematiche integrate e 
3. le operazioni di incremento e decremento. -->

<!-- Funzioni Matematiche Integrate, ne abbiamo di tipi diversi:
1. abs() -> valore assoluto (associa un numero negativo, con lo stesso numero ma positivo) 
2. pow() -> calcola la potenza 
3. sqrt() -> calcola la radice quadrata 
4. fmod() -> resituisce il resto della divisione (modulo) 
5. rand() -> genera numero casuale
6. rand(min, max) -> genera numero casuale tra i 2 parametri -->

<!-- ++ -> incrementa il valore di 1
-- -> decrementa il valore di 1 -->

<!-- se andiamo a sommare un numero intero con una stringa che inizia con un numero
allora il risultato sarà tutto convertito in INT.
E CONSIDERATA UNA PRATICA SCORRETTA E NON BUONA DI PROGRAMMAZIONE -->

<!-- operazioni matematiche di base -->
<?php
$num1 = 3;
$num2 = 4;

echo ((1 + 2 + $num1) * $num2) / 2 - 5, "<br />";
?>

<br />

<!-- andiamo a testare le varie funzioni matematiche integrate -->
<?php

echo abs(110 - 120), "<br />"; // risultato corretto: -10, output: 10

echo pow(2, 6), "<br />"; // 2 ^ 6 = 64

echo sqrt(100), "<br />"; // radice di 100 = 10

echo fmod(20, 7), "<br />"; // 20 % 7 = resto di 6

echo rand(), "<br />"; // numero randomico

echo rand(1, 10), "<br />"; // numero randomico tra 1 e 10

?>


<br />


<!-- andiamo a testare gli operatori di Assegnazione Combinati
e di incremento / decremento -->
<?php

$varDiRiferimento = 5;

// assegnazione combinati
echo $varDiRiferimento += 3, "<br />"; // ora la $var = 8
echo $varDiRiferimento -= 3, "<br />"; // ora la $var = 5
echo $varDiRiferimento *= 2, "<br />"; // ora la $var = 10
echo $varDiRiferimento /= 5, "<br />"; // ora la $var = 2

// incremento e decremento
$varDiRiferimento++;
echo $varDiRiferimento, "<br />"; // ora la $var = 3

$varDiRiferimento--;
echo $varDiRiferimento, "<br />"; // ora la $var = 2
?>


<br />


<!-- andiamo a convertire una stringa in un integer -->
<?php

echo 3 + "4 houses"; // output: Warning, 7

?>