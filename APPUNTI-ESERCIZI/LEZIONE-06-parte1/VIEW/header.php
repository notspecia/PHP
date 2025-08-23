<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ANDIAMO A PRENDERE IL TITOLO_SITO DAL FILE DI config.php -->
    <title><?= TITOLO_SITO ?></title>

    <!-- collegamento al file style.css, ./ perchè bisogna partire dall INDEX.PHP!
    in cui esso si collegherà al style.css -->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <h1><?= TITOLO_SITO ?></h1>