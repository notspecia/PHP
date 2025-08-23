<?php
// Verifica se l'utente è loggato
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php'); // Redirigi alla pagina di login se non è loggato
    exit();
}

// Array delle playlist dell'utente, passato dal controller
// $playlists = [
//     ['id' => 1, 'title' => 'Rock Playlist', 'cover_image' => 'rock.jpg'],
//     ['id' => 2, 'title' => 'Pop Hits', 'cover_image' => 'pop.jpg'],
//     ...
// ];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le tue Playlist</title>
    <link rel="stylesheet" href="/public/style.css"> <!-- Link al tuo file CSS -->
</head>

<body>
    <h1>Le tue Playlist</h1>

    <a href="/playlist/create.php" class="btn">Crea una nuova Playlist</a>

    <?php if (!empty($playlists)): ?>
        <ul class="playlist-list">
            <?php foreach ($playlists as $playlist): ?>
                <li class="playlist-item">
                    <img src="/public/uploads/images/<?php echo $playlist['cover_image']; ?>" alt="Cover di <?php echo htmlspecialchars($playlist['title']); ?>" class="playlist-cover">
                    <div class="playlist-info">
                        <h2><?php echo htmlspecialchars($playlist['title']); ?></h2>
                        <a href="/playlist/view.php?id=<?php echo $playlist['id']; ?>" class="btn">Vedi Dettagli</a>
                        <a href="/playlist/edit.php?id=<?php echo $playlist['id']; ?>" class="btn">Modifica</a>
                        <a href="/playlist/delete.php?id=<?php echo $playlist['id']; ?>" class="btn">Elimina</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Non hai ancora creato nessuna playlist.</p>
    <?php endif; ?>
</body>

</html>