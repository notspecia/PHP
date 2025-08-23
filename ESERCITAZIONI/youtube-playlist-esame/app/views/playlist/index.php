<?php session_start(); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principale</title>
    <!-- Inclusione di Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusione di Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRVa2Gy4BljfHCMvXIbMn7G8Ml5EN4sqciW8V3+Jx" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 600px;
            padding: 30px;
            border: 2px solid black;
            border-radius: 20px;
        }

        img {
            width: 200px;
        }

        .btn {
            text-align: center;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Benvenuto!</h1>

        <?php

        use App\Controllers\PlaylistController;


        // controllo per vedere se l'utente è loggato nella sessione 
        if (isset($_SESSION["user_id"])) {
            $ctrl = new PlaylistController();
            $playlists = $ctrl->getPlaylistsByUserId($_SESSION);

            echo '<div class="text-end mb-3">
          <a href="/youtube-playlist/create" class="btn btn-primary">Crea Playlist</a>
          </div>';

            echo '<a href="/youtube-playlist/logout" class="btn btn-outline-danger mb-5">Logout</a>';

            // creazione di una lista <ul> che visualizza le playlist dell'utente se sono presenti
            if (!empty($playlists)) {
                echo '<div class="row">';
                foreach ($playlists as $playlist) {
                    echo '<div class="col-md-4 mb-4">
              <div class="card">
                <img src="public/' . htmlspecialchars($playlist['cover_image']) . '" class="card-img-top" alt="Cover Image">
                <div class="card-body">
                  <h5 class="card-title">' . htmlspecialchars($playlist['title']) . '</h5>
                   <form action="/youtube-playlist/api/' . $playlist['id'] . '" method="post">
                     <input type="hidden" name="_method" value="DELETE">
                     <button type="submit" class="btn btn-danger">Elimina</button>
                  </form>
                </div>
              </div>
            </div>';
                }

                echo '</div>';


                // link per il login in tal caso l'utente non è ancora loggato alla sessione (PAGINA login.php e register.php)
            } else {
                echo 'No playlists found.';
            }
        } else {
            echo '<div class="alert alert-warning text-center">Devi fare il login per vedere le tue playlist.</div>';

            echo '<div class="mt-4 text-center">
          <h2>Devi fare il login</h2>
          </div>';

            echo '<a href="/youtube-playlist/login" class="btn btn-outline-primary">Login</a>';
        }
        ?>
    </div>

</body>

</html>