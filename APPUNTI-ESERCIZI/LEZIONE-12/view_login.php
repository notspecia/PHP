<?php

// codice eseguito se la variabile di sessione "logged" NON è impostata
// significa che l'utente non è loggato e il modulo di login sarà visualizzato!
if (!isset($_SESSION['logged'])):

?>

    <!-- Modulo di login: viene mostrato solo se l'utente NON è LOGGATO! -->
    <form action="" method="post">
        <input class="form-control" type="text" name="username" placeholder="username">
        <br>
        <input class="form-control" type="password" name="password" placeholder="password">
        <br>
        <input class="btn btn-primary" type="submit" value="Login">
    </form>

<?php endif; ?>