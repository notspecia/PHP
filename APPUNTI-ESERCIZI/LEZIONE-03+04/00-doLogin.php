<!-- tramite il form, dopo aver compilato i dati richiesti
verranno passati qui al php, possiamo assegnare gli input passati volendo
anche a delle $variabili -->

<!-- il $_POST è il metodo di come sono trasmessi i dati (deve combaciare con l'html -> get/post)
subito dopo esso vanno le [], dove dentro andremo ad inserire il name = del input HTML  -->


<!-- usiamo una funzione presa dalla conf.php, per fare meno lavoro  -->


<?php

include "00-configurazione.php";

$username = $_POST["username"];
$password = $_POST["password"];

checkLogin($username, $password);

?>