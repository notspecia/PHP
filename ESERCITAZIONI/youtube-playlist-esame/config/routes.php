<?php

require '../vendor/autoload.php';

// includiamo i namespace precedentemente creati
use Config\Database;
use FastRoute\RouteCollector;

use App\Models\Playlist as PlaylistModel;
use App\Controllers\PlaylistController;
use Api\Playlist as ApiPlaylist;

use App\Models\User as UserModel;
use App\Controllers\UserController;
use App\Views\View;


// connessione al database
$database = new Database();
$db = $database->getConnection();

// inizializza i modelli    
$playlistModel = new PlaylistModel($db); // Model/Playlist
$userModel = new UserModel($db); // Model/User

// crea un dispatcher per le rotte
$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {


    // Rotte API per le Playlist  (CRUD)
    $r->addRoute('GET', '/youtube-playlist/api/', [ApiPlaylist::class, 'getAllPlaylist']);
    $r->addRoute('GET', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'getPlaylistById']);
    $r->addRoute('GET', '/youtube-playlist/api/user/{user_id:\d+}', [ApiPlaylist::class, 'getPlaylistsByUserId']);
    $r->addRoute('POST', '/youtube-playlist/api/', [ApiPlaylist::class, 'postPlaylist']);
    $r->addRoute('PATCH', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'patchPlaylist']);
    $r->addRoute('PUT', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'putPlaylist']);
    $r->addRoute('DELETE', '/youtube-playlist/api/{id:\d+}', [ApiPlaylist::class, 'delPlaylist']);

    // Rotte per le viste sulla view che l'utente vedrà
    $r->addRoute('GET', '/youtube-playlist/', [View::class, 'indexView']);
    $r->addRoute('GET', '/youtube-playlist/create', [View::class, 'storeView']);
    $r->addRoute('POST', '/youtube-playlist/create', [PlaylistController::class, 'createPlaylist']);

    // Rotte per l'autenticazione
    $r->addRoute('GET', '/youtube-playlist/login', [View::class, 'loginView']);
    $r->addRoute('POST', '/youtube-playlist/login', [UserController::class, 'verifyUser']);
    $r->addRoute('GET', '/youtube-playlist/register', [View::class, 'registerView']);
    $r->addRoute('POST', '/youtube-playlist/register', [UserController::class, 'createUser']);
    $r->addRoute('GET', '/youtube-playlist/logout', [UserController::class, 'logout']);
});


// recupera il metodo HTTP e URI dalla richiesta
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// verifica se l'URI contiene parametri e se sì li rimuove dalla URI (EX: ?id=123).
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);



// invoca il dispatcher con il metodo HTTP e l'URI
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {

        // rotte non trovate
    case FastRoute\Dispatcher::NOT_FOUND:
        echo json_encode(['error' => '404 - Not Found']);
        http_response_code(404);
        break;

        // metodi non consentiti
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:

        echo json_encode(['error' => '405 - Method Not Allowed']);
        http_response_code(405);
        break;

        // imposta il controller per la rotta corrispondente
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $class = $handler[0];
        $method = $handler[1];

        $controllerInstance = new $class($db);


        if (!($controllerInstance instanceof View)) {
            header('Content-Type: application/json');
        }


        $response = $controllerInstance->$method(...$vars);
        echo json_encode($response);
        break;
}
