<?php

$pagina = "Home";

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $pagina = $_GET["page"];
}


switch ($pagina) {
    case 'gallery':
        include "./VIEW/pages/gallery.php";

        break;

    default:
        include "./VIEW/pages/home.php";
        break;
}
