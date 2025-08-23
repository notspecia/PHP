<?php

// recuperiamo il valore del campo "logout" dalla richiesta POST, se non è presente, assegna una stringa vuota
$logout = $_POST['logout'] ?? '';

// se il valore di "logout" è "123456", svuota tutte le variabili di sessione tramite --> session_unset();
if ($logout == '123456') {
    session_unset();
}

// assegnamento dei valori dei campi: "username" "password", recuperati tramite la richiesta POST
// se non sono presenti, assegna una stringa vuota
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// se l'username e password corrispondono (ex --> username: mio nome + password: admin) l'utente potrà loggare
if ($username == 'gabriele' && $password == 'admin') {
    $_SESSION['user_logged'] = $username;
    $_SESSION['logged'] = true;
}
