<!-- qui vedremo tutto quello che abbiamo creato -->
<?php

include_once "../src/model/Prodotto.php";
include_once "../src/repos/ProdottoDAO.php";

use SP\model\Prodotto;
use SP\repos\ProdottoDAO;

// parametri passati alla funzione che costruisce il prodotto
$prodotto = new Prodotto(0, "Prodotto1", "Descrizione prodotto", 9.99);

echo "<pre>";
var_dump($prodotto);
echo "</pre>";
