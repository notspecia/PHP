<?php

$immagini = [
    "https://img.pokemondb.net/sprites/ruby-sapphire/normal/nidoran-m.png",
    "https://img.pokemondb.net/sprites/ruby-sapphire/normal/dewgong.png",
    "https://img.pokemondb.net/sprites/ruby-sapphire/normal/lapras.png",
    "https://img.pokemondb.net/sprites/ruby-sapphire/normal/scyther.png"
];

// se sei nella sessione ed è gia stata settata la variabile contatore,
// va a prendere la variabile che sia aggiornata a quella sessione
// ALTRIMENTI LA INIZIALIZZIAMO = 0
if (isset($_SESSION['$contatore'])) {
    echo "sessione OK";
} else {
    $_SESSION['$contatore'] = 0;
    echo "sessione KO";
}

// se è settata l'azione, allora incrementa di no
if (isset($_POST["azione"])) {

    if ($_POST["azione"] == "incrementa") {
        incrementa();
    }
    if ($_POST["azione"] == "decrementa") {
        decrementa();
    }
}



// creiamo una funzione che incrementa la variabile contatore
function incrementa()
{
    $_SESSION['$contatore']++;
}


// creiamo una funzione che decrementa la variabile contatore
function decrementa()
{
    $_SESSION['$contatore']--;
}



?>

<form action="" method="post">

    <input type="hidden" name="azione" value="incrementa">
    <button>+</button>


    <input type="hidden" name="azione" value="decrementa">
    <button>-</button>

</form>

<h3><?= $_SESSION['$contatore'] ?></h3>


<?php

$num = $_SESSION['$contatore'];
$foto = $immagini[$num];

?>

<div class="fotocopertina">
    <img src="<?= $immagini[$contatore] ?>" alt="" class="foto">
</div>