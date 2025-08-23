<?php
// Verifica se l'utente è loggato
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php'); // Redirigi alla pagina di login se non è loggato
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea una nuova Playlist</title>
    <link rel="stylesheet" href="/public/style.css"> <!-- Link al tuo file CSS -->
</head>

<body>
    <h1>Crea una nuova Playlist</h1>

    <form action="/playlist/store.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titolo della Playlist</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="cover_image">Immagine di copertina</label>
            <input type="file" id="cover_image" name="cover_image" accept="image/*" required>
        </div>

        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

        <button type="submit" class="btn">Crea Playlist</button>
    </form>
</body>

</html>