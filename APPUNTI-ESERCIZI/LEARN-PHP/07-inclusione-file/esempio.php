<!-- è utile includre i files php per varie ragioni:
 01. magari abbiamo un file con funzioni (function.php) che magari ci connette al database... (o altro)
 02. per rendere il codice finale e il progetto ben distinto e + pulito / comprensibile
 03. un codice mantenibile e un codice facile da gestire da fare delle manutenzioni (CODICE MODULARE) 
 04. evitare di creare RIDONDANZE DI BLOCCHI DI CODICE!!!!
 
 si puo usare sia -> include / require, ma:
 01. include ci dice che il file non c'è e ci da un WARNING (ma non blocca tutto il codice!) + amichevole :)
 02. required se non trova il file allora ci darà un FATAL ERROR (bloccherà tutto il codice!) 
 
 include_once  /  required_once   -> dice che quel file può essere inserito (incluso) solo 1 volta!
 se lo si inserisce + volte (anche solo 2) darà un FATAL ERROR! -->

<?php

function salutaTutti()
{
    echo "ciao a tutte le sezioni, dal file ESEMPIO";
}