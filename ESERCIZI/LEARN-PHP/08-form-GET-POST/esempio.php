<!-- questo sarà il file.php che prenderà dal form i dati inseriti dall'utente (GET / POST)
 
 01. GET -> I dati inviati tramite GET vengono inseriti nell'URL del browser, rendendoli visibili e accessibili.
            L'URL ha un limite di lunghezza, quindi è possibile inviare solo una quantità limitata di dati.
            GET viene usato per operazioni idempotenti, come richieste di ricerca o visualizzazione di dati.

 02. POST-> I dati vengono inviati nel corpo della richiesta HTTP e non nell'URL, quindi non sono visibili nell'URL. Questo non li rende sicuri, ma li nasconde dagli URL.
            È possibile inviare molti più dati rispetto al metodo GET.
            POST viene usato per inviare dati che dovrebbero essere elaborati o salvati, come moduli di registrazione o login. -->
<?php

// prendiamo i dati del form tramite il metodo passato e inseriamoli in delle variabili
$username = $_GET["username"];
$surname = $_GET["surname"];
$age = $_GET["age"];

// stampiamo le variabili!
echo "ciao sono: " . $username . " " . $surname . "<br>";

if ($age >= 18) {
    echo "SEI MAGGIORENNE! benvenuto";
} else {
    echo "SEI MINORENNE! aspetta i 18 anni prima di loggare";
}
