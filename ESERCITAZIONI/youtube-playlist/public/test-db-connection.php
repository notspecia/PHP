<!-- file creato per verificare se la connessione al db è andata a buon fine con un messaggio sullo schermo! -->
<?php

require_once '../config/Database.php';

use Config\Database;

// crea un'istanza della classe Database
$db = new Database();

// prova a ottenere la connessione
$conn = $db->getConnection();

if ($conn) {
    echo "Connessione al database avvenuta con successo!";
} else {
    echo "Errore nella connessione al database.";
}