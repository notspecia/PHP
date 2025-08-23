<!-- facciamo il controllo se è loggato l'utente alla sessione
per evitare di fare accedere chiunque a delle informazioni segrete come questa pagina 
da SESSIONI DIVERSE DELL'UTENTE, ex: provare con una pagina anonima con una sessione diversa-->


<!-- facciamo una prova di login in base alle credenziali passate
nel caso le credenziali siano errate, ci riporta al login.html tramite header("location: ...") -->

<!-- session -> -->


<?php

session_start();

// Verifica se l'utente è loggato, altrimenti reindirizza alla pagina di login
if (!isset($_SESSION["loggato"])) {
    header("location:00-login.html");
}

// Se la sessione todolist non esiste, la inizializziamo
if (!isset($_SESSION["todolist"])) {
    $_SESSION["todolist"] = [];
}

// Se è stato passato un nuovo todo, lo aggiungiamo alla todolist
if (isset($_POST["todo"])) {
    $_SESSION["todolist"][] = $_POST["todo"];
}





// funzione usata nel doLogin.php
function checkLogin($username, $password)
{
    if ($username == "Gabriele" && $password == "12345") {
        // echo "ciao benvenuto, tu sei $username e hai la password $password";
        $_SESSION["loggato"] = $username;
        header("location:00-paginaSegreta.php");
        
    } else {
        // echo "Username o Password errati, riprova!";
        session_destroy();
        header("location:00-login.html");
    }
}

?>