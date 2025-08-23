<?php

require '../vendor/autoload.php';

use Api\Playlist as ApiPlaylist;
use App\Controllers\PlaylistController;
use App\Controllers\UserController;
use App\Models\Playlist;
use App\Models\User;
use App\Views\View;
use Config\Database;
use FastRoute\RouteCollector;

$database = new Database();
$db = $database->getConnection();
$playlistModel = new Playlist($db);
$userModel = new User($db);

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    // Rotte API
    $r->addRoute('GET', '/youtube-playlist/api/', [ApiPlaylist::class, 'getAllPlaylist']);
    $r->addRoute('POST', '/youtube-playlist/api/', [ApiPlaylist::class, 'postPlaylist']);
    $r->addRoute('GET', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'getPlaylistById']);
    $r->addRoute('PATCH', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'patchPlaylist']);
    $r->addRoute('PUT', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'putPlaylist']);
    $r->addRoute('DELETE', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'deletePlaylist']);

    // Rotte per le viste
    $r->addRoute('GET', '/youtube-playlist/', [View::class, 'indexView']);
    $r->addRoute('GET', '/youtube-playlist/create', [View::class, 'storeView']);
    $r->addRoute('POST', '/youtube-playlist/create', [PlaylistController::class, 'store']);

    // Rotte per l'autenticazione
    $r->addRoute('GET', '/youtube-playlist/login', [View::class, 'loginView']);
    $r->addRoute('POST', '/youtube-playlist/login', [UserController::class, 'verifyUser']);

    $r->addRoute('GET', '/youtube-playlist/register', [View::class, 'registerView']);
    $r->addRoute('POST', '/youtube-playlist/register', [UserController::class, 'createUser']);

    $r->addRoute('GET', '/youtube-playlist/logout', [UserController::class, 'logout']);
});

// Recupera metodo HTTP e URI dalla richiesta
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Rimuovi la query string (se presente)
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

// Decodifica l'URL
$uri = rawurldecode($uri);

// Dispatcera la richiesta per vedere se è valida
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 - Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 - Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        // Set the controller to the one set in the corresponding route
        $class = $handler[0];
        $method = $handler[1];

        // Inizializza la classe e gestisci la risposta
        $newClass = new $class($db); // Assicurati che il costruttore accetti $db se necessario

        if (!($newClass instanceof View) && !($newClass instanceof UserController)) {
            header('Content-Type: application/json');
        }

        // Chiama il metodo e gestisci la risposta
        $response = $newClass->$method(...$vars);
        echo json_encode($response); // Assicurati che i metodi restituiscano i dati in un formato JSON
        break;
}
