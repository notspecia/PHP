<?php


function lunghezzaStringa($stringa)
{
    return strlen($stringa);
}

$stringa = "ciao mondo!";
echo "la lunghezza della stringa è: " . lunghezzaStringa($stringa) . "<br> <br>";

?>






<?php

function contaParole($stringa)
{
    $contatore = 1;

    for ($i = 0; $i < strlen($stringa); $i++) {
        if ($stringa[$i] == " ") {
            $contatore++;
        }
    }

    return $contatore;
}

$stringa = "ciao come s";
echo "il numero di parole nella stringa è: " . contaParole($stringa) . "<br> <br>";

?>





<?php

echo "la data e l'orario corrente è: " . date('Y-m-d H:i:s') . "<br> <br>";

?>





<?php

function countPositive($array)
{
    $counter = 0;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > 0) {
            $counter++;
        }
    }

    return $counter;
}

$array = array(1, -2, 6, 0, -10, 5);
echo countPositive($array);

?>