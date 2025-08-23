<!-- 1. Scrivi uno script PHP che stampa "Hello, World!" sullo schermo. -->
<?php
echo "Hello, World! <br /> <br />";
?>



<!-- 2. Crea uno script PHP che dichiara due variabili numeriche e stampa la somma, la differenza, il prodotto e il quoziente. -->
<?php

$num1 = 10;
$num2 = 2;

echo "somma -->" . $num1 + $num2, "<br />";
echo "differenza --> " . $num1 - $num2, "<br />";
echo "prodotto -->" . $num1 * $num2, "<br />";
echo "quoziente -->" . $num1 / $num2, "<br /> <br />";

?>




<!-- 3. Scrivi uno script PHP che controlla se una variabile numerica è positiva, negativa o zero e stampa un messaggio appropriato. -->
<?php

$num = -1;

if ($num === 0) {
    echo "ciao sono un numero con valore 0 <br />";
} else if ($num > 0) {
    echo "ciao sono un numero positivo <br />";
} else {
    echo "ciao sono un numero negativo <br /> <br />";
}

?>



<!-- 4. Crea uno script PHP che utilizza un ciclo for per stampare i numeri da 1 a 10. -->
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "$i <br />";
}

echo "<br /> <br />";

?>



<!-- 5. Scrivi uno script PHP che utilizza un ciclo while per stampare i numeri da 1 a 10. -->
<?php

$i = 1;

while ($i <= 10) {
    echo "$i <br />";
    $i++;
}

echo "<br /> <br />";

?>



<!-- 6. Crea una funzione PHP che accetta due numeri come parametri e restituisce il loro prodotto. Chiama questa funzione e stampa il risultato. -->
<?php

function productNumbers($x, $y)
{
    echo "the product is --> " . $x * $y;
}

$x = 6;
$y = 4;

productNumbers($x, $y);

?>