<?php
require "../vendor/autoload.php";
require '../config/routes.php';

use App\Controllers\PlaylistController;
use App\Models\Playlist;
use Config\Database;

header("Content-Type: application/json");

// Inizializza la connessione al database
$database = new Database();
$db = $database->getConnection();

// Passa la connessione PDO al modello Playlist (richiesto dal costruttore del model)
new Playlist($db);

// Estrai il metodo HTTP della richiesta
$verb = $_SERVER['REQUEST_METHOD'];

// Estrai l'URI richiesta
$request = $_SERVER['REQUEST_URI'];
$basePath = "/04-ESERCITAZIONE-youtube/api"; // Base path della tua applicazione
$relativeUri = str_replace($basePath, '', $request); // Rimuovi il base path dall'URI
$segments = explode('/', trim($relativeUri, '/')); // Estrai i segmenti dall'URI

// Verifica se siamo su api/playlist e se c'è un ID
$id = null;
if (isset($segments[0]) && $segments[0] === 'playlist') {
    if (isset($segments[1]) && is_numeric($segments[1])) {
        $id = (int) $segments[1]; // Converte l'ID in numero intero se presente
    }
}

// Gestisci la richiesta HTTP
switch ($verb) {
    case "GET":
        if ($id) {
            // Ottieni una playlist specifica
            $data = Playlist::readById($id);
        } else {
            // Ottieni tutte le playlist
            $data = Playlist::read();
        }
        echo json_encode($data);
        break;

    case "POST":
        // Crea una nuova playlist
        $postData = json_decode(file_get_contents("php://input"), true);
        $data = Playlist::create($postData);
        echo json_encode($data);
        break;

    case "PATCH":
        if ($id) {
            // Aggiorna una playlist specifica
            $updateData = json_decode(file_get_contents("php://input"), true);
            $data = Playlist::update($id, $updateData);
            echo json_encode($data);
        }
        break;

    case "PUT":
        if ($id) {
            // Sostituisci una playlist specifica
            $replaceData = json_decode(file_get_contents("php://input"), true);
            $data = Playlist::replace($id, $replaceData);
            echo json_encode($data);
        }
        break;

    case "DELETE":
        if ($id) {
            // Cancella una playlist specifica
            $data = Playlist::delete($id);
            echo json_encode($data);
        }
        break;

    default:
        // Metodo HTTP non supportato
        echo json_encode(["error" => "Metodo non supportato"]);
        break;
}
