<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Playlist</title>
    <!-- Inclusione di Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusione di Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRVa2Gy4BljfHCMvXIbMn7G8Ml5EN4sqciW8V3+Jx" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 500px;
            margin-top: 100px;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
        }

        .btn {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- permette all'utente di CREARE UNA NUOVA PLAYLIST una volta che si è loggato -->
    <div class="container">
        <h1 class="text-center mb-4">Crea Playlist</h1>
        <form action="/youtube-playlist/create" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo Playlist</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Inserisci il titolo" required>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine di copertura</label>
                <input type="file" id="cover_image" name="cover_image" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Crea Playlist</button>
        </form>
    </div>

</body>

</html>