<nav>

    <?php

    // TRUE operatore ternario
    // if (isset($_GET["page"])) {
    //     $pagina = $_GET["page"];
    // } else {
    // }

    $selected = $_GET["page"] ?? "home";


    foreach ($menu as $position) {
        $etichetta = $position["etichetta"];
        $link = $position["collegamento"];

        // if else simile
        $active = strtoupper($selected) == strtoupper($etichetta) ? "active" : "inactive";

        // tra apici singoli ('') le variabili non vengono interpolate!
        echo "<a href='{$link}' class='{$active}'  title='vai alla pagina {$etichetta}'>
        {$etichetta} </a>";

        echo "<br>";
    }

    ?>

</nav>