<?php

$pagina = "Home";

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $pagina = $_GET["page"];
}


switch ($pagina) {
    case 'gallery':
        include "./VIEW/pages/gallery.php";
        break;

    case 'solfuri':
        $solfuro = new Minerale();
        $solfuro->nome = "solfuro di magnese...";
        $solfuro->tipo = "tipo scuro";

        $bromo = new Minerale();
        $bromo->nome = "bromo di...";
        $bromo->tipo = "tipo nombre";

        echo $solfuro->stampaScheda();
        echo $bromo->stampaScheda();
        break;

    default:
        include "./VIEW/pages/home.php";
        break;
}
