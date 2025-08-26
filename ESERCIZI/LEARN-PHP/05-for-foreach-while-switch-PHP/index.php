<!-- TODO -->

<!-- switchcase è uno strumento utile per eseguire differenti vlocchi di codice in base al valore di una variabile o di un'espressione -->
<?php
$nome = "gabriele";

switch ($nome) {
    case "nicolo":
        echo "ciao sono $nome";
        break;

    case "gabriele":
        echo "ciao sono $nome";
        break;

    default:
        echo "no name!";
        break;
}