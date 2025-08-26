<!-- 
 una sessione sono simili ai cookie (sono salvati sul pc dell'utente e non possono tenere dei DATI SENSIBILI) 
mentre le sessione sono dei dati temporanei SALVATI SUL SERVER ed è in grado di riconoscerci (ex: un utente che può accedere a quella pagina)
-->

<?php

//! partirà la sessione
session_start();

// creiamo una variabile all'interno della sessione e poi accediamo ad essa
$_SESSION["user_id"] = 23;
echo $_SESSION["user_id"];


// se vogliamo rimuovere dei dati dalla sessione senza chiuderla (SENZA ABORTIRE LA SESSIONE)
unset($_SESSION["user_id"]);
echo $_SESSION["user_id"];

//! distruggere la sessione (chiusa)
session_destroy();