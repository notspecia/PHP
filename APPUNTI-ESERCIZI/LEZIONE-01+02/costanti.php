<!--Le costanti in PHP sono simili alle variabili, ma una volta definite, 
il loro valore non può essere cambiato. Le costanti sono utili per definire 
valori che devono rimanere invariati nel tempo, come configurazioni o parametri fissi.  -->


<!-- per definire le costanti usiamo la funzione:
define("nome_costante", valore), non sarà necessario l'uso del $ dato che è una costante -->

<!-- le costanti sono AUTOMATICAMENTE GLOBALI, ovunque dove siano state dichiarate -->
<?php

// dichiarazione &variabile (può cambiare il suo valore)
$grandezza_minima = 1000;
echo $grandezza_minima;
echo "<br />";

// dichiarazione costante (non può essere cambiata)
define("MAX_WIDTH", 980);
echo MAX_WIDTH;
echo "<br />";

// andiamo a MODIFICARE la $variabile (si può!)
$grandezza_minima += 50;
echo $grandezza_minima;

// andiamo a MODIFICARE la costante (NON si può! ERRORE!)
// MAX_WIDTH += 50;
// echo $MAX_WIDTH;

?>