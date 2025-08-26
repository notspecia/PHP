<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAB</title>
</head>

<body>

    <h1>Laboratorio PHP</h1>

    <?php
    $testo = "<h2>";

    // concateniamo 2 stringhe piu rapidamente: $testo = $testo . "<h2>"
    $testo .= "funziona!!!!! </h2>";
    echo $testo;
    ?>

    <!-- se vogliamo stampare su HTML $testo: possiamo usare 2 possibilità -->
    <?= $testo ?>
    <?php echo $testo ?>

    <hr>
    <!------------------------------------------------------------------------------------->

    <!-- andiamo ad includere all'index.php dei file esterni .php -->
    <?php
    require_once "./strings.php";
    ?>

</body>

</html>