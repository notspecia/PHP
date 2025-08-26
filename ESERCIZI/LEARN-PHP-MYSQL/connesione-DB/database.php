<!-- file creato per la gestione della connessione al DB -->


<?php

// parametri per la connessione al database
$db_server = "localhost";        // Server locale
$db_user = "root";               // Nome utente
$db_passwrd = "";                // Password (vuota)
$db_name = "youtube_playlist";   // Nome del database


// connessione al database con gestione delle eccezioni (messaggi di successo ed errore + puliti)
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_passwrd, $db_name);
    echo "Connesso al database: $db_name";
    // cattura l'eccezione e la assegna a $e
} catch (mysqli_sql_exception $e) {
    echo "Errore di connessione: " . $e->getMessage();
}


// creazione di una query per ottenere i dati dal database dopo aver creato la connessione con essa
$sqlQuery = "SELECT * FROM playlists";
$result = mysqli_query($conn, $sqlQuery); 

// Controllo se ci sono risultati
if (mysqli_num_rows($result) > 0) {
    // Stampa i dati come tabella HTML
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>User_id</th>
                <th>Title</th>
                <th>Cover_image</th>
            </tr>";

    // Ciclo sui risultati e stampa ogni riga
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['user_id'] . "</td>
                <td>" . $row['title'] . "</td>
                <td>" . $row['cover_image'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nessun dato trovato.";
}

// Chiudi la connessione al database
mysqli_close($conn);






//! MANIERA SBAGLIATA PER MOSTRARE MESSAGGI DI SUCCESSO / ERRORE RIGUARDO LA CONNESIONE AL DB
// // creiamo la connessione al database tramite la funzione -> mysqli_connect() passando i parametri necessari
// $conn = "";
// $conn = mysqli_connect($db_server, $db_user, $db_passwrd, $db_name);

/* controllo se effettivamente la connesione al database è andata a buon fine!!
se $conn esiste (true)... */
// if ($conn) {
// echo "i'm connected to the database: $db_name";
// } else {
// echo "ERROR!";
// }