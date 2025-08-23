<!-- principalmente visione di come usare gli if statement all'interno di un file html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE HTML</title>
</head>

<body>
    <?php $numero = 30; ?>

    <h1>sarà il numero inserito (<?php echo $numero; ?>) maggiore di 20?</h1>

    <!-- if else in HTML, si mette la condizione e successivamente i : al posto delle {}
     per chiudre gli if  -->
    <?php if ($numero > 20): ?>
        <p>yes it is!!</p>
    <?php else: ?>
        <p>no it isn't!!</p>
    <?php endif ?>

</body>

</html>