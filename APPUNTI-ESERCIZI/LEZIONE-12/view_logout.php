<?php

// codice eseguito se la variabile di sessione "logged" è impostata
// significa che l'utente è loggato e il modulo di logout sarà visualizzato!
if (isset($_SESSION['logged'])):

?>

    <!-- Modulo di logout: viene mostrato solo se l'utente è LOGGATO! -->
    <form action="" method="post">
        <input type="hidden" name="logout" value="123456">
        <input class="btn btn-danger" type="submit" value="Logout">
    </form>

<?php endif; ?>