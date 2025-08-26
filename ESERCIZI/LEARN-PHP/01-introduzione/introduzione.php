<!-- qui dentro scriviamo il codice php
le istruzioni si chiuodono con ; -->

<!-- l'istruzione php se lo mettiamo in un tag
HTML non verrà visualizzata -->

<!-- echo per mandare a schermo le nostre istruzioni -->

<!-- se si apre come file, vedremo solo il codice scritto
per elaboralo abbiamo bisogno di un web server come apache -->

<!-- apici doppi " " variabili interpolate ->"hello php! $i"
apici singoli ' ' variabili non interpolate ->'hello php! $i' NOO! :(-->

<!-- se vogliamo andare a capo utilizziamo il tag <br>, ma deve essere
messo tra virgolette " <br /> " -->

<!-- PHP FUNZIONA A CASCATA, DICHIARARE PRIME LE VARIABILI
PER POI USARLE -->

<!-- le variabili si introducono con il $ e sono dinamiche
(non c'è bisogno di inizializzare il tipo) viene detto preprocessore -->

<!-- alle $variabili si può riassegnare un nuovo valore -->

<!-- le variabili create e non inizializzate (no valore), avranno un valore -->

<!-- tra le tipologie di variabili in php abbiamo: 
 integer, floating-point, string, boolean, array, object, resource e null -->

<!-- per arrotondare un numero con la virgola (float), possiamo utilizzare
(int)($variabile) -->

<!-- var_dump() ci va ad ispezionare la variabile: (valore e tipo) -->







<!-- INTRODUZIONE alle stringhe
per concatenare le stringhe in PHP utilizziamo il .
può essere anche concatenata la stessa $variabile con un altro pezzo -> .= str -->

<ul>
    <?php

    /* andiamo a ciclare 10 volte un messaggio 
    con variabile interpolata */
    for ($i = 0; $i < 10; $i++) {
        echo "<li> hello php! $i </li>\n";
    }
    echo "<br>";

    // number float gioco + conversione di tipo
    $a = 4;
    $b = 5.5 + $a; // output: 9.5
    $a = 3;
    echo (int)($b), "<br>"; // output: 9
    echo $a, "<br><br>"; // output: 7


    // stringhe gioco
    $nome = "gabriele";
    $cognome = "speciale";
    echo $nome . " e sono poco " . $cognome, "<br>";


    // booleano gioco
    $prova = ("4" === 4);
    echo $prova, "<br>"; // output: 1 --> 1 è uguale a true

    if ($prova != true) {
        echo "prova è: falso anche se non avrà il valore false <br> <br>";
    }


    // utilizzo di var_dump(), per analizzare anche + $variabili
    $str1 = "ciao";
    $str2 = "helloo";
    $num1 = 4;

    var_dump($str1, $str2, $num1);

    ?>
</ul>