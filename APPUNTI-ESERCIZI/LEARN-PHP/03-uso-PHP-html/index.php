<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integrazione HTML + PHP</title>
</head>

<body>
    <!-- possiamo inserire anche delle variabili all'interno dei tag mostrando il loro contenuto -->
    <?php
    $var = "ciao mondo!";
    ?>

    <h1><?= $var ?></h1>


    <!-- utilizzare anche un ciclo for di PHP per generare tanti elementi HTML (<li>) -->
    <ul>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<li>car number $i</li>";
        } ?>

    </ul>


    <!-- inserire anche la data e orario correnti (aggiornati sempre) all'interno del documento HTML in un <tag>
    y: solo le ultime 2 cifre dell anno (24)       Y: anno in formato completo (2024) 
    H: ora 0 24                                    h: ora 0 12 -->
    <p>data e orario corrente qui ->
        <?php
        echo date("d/m/Y H:i:s");
        ?>
    </p>


    <!-- si possono inserire + if in tag php diversi per magari mandare a schermo qualcosa -->
    <?php if (50 > 40): ?>
        <p>ciao sono + GRANDE</p>

    <?php else: ?>
        <p>ciao sono + PICCOLO</p>

    <?php endif; ?>

</body>

</html>