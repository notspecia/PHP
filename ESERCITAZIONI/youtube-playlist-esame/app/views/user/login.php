<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Inclusione di Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusione di Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRVa2Gy4BljfHCMvXIbMn7G8Ml5EN4sqciW8V3+Jx" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 700px;
            margin-top: 150px;
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

    <!-- permette all'utente di effettuare il login per poi in caso di successo viene reindirizzato alla playlist/index.php -->
    <div class="container">
        <h1 class="text-center mb-4">Login</h1>
        <form action="/youtube-playlist/login" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Inserisci username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Inserisci password" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
        <div class="text-center mt-3">
            <a href="/youtube-playlist/register" class="btn btn-link">Registrati</a>
        </div>
    </div>
</body>

</html>