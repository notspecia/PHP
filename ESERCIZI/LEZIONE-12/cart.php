<?php

// avvia una sessione per tracciare le variabili di sessione 
session_start();

// controllo se l'utente ha fatto il LOGIN, altrimenti lo si reindirzza alla pagina iniziale (index.php)
if (!isset($_SESSION['logged'])) {
    header('Location:./index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CDN bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">

        <!-- andiamo a mostrare ogni prodotto tramite il foreach nel CARRELLO creato dall'utente -->
        <?php foreach ($_SESSION['carrello'] as $prodotto) :  ?>
            <h4><?= $prodotto ?></h4>
        <?php endforeach; ?>

    </div>

</body>
</html>