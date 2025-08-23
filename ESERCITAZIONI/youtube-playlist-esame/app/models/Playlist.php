<?php

namespace App\Models;


/**
 * Classe Playlist
 * 
 * questa classe rappresenta il modello per la gestione delle playlist nel database,
 * fornisce metodi per le operazioni CRUD (Create, Read, Update, Delete) 
 * sulle playlist usando PDO per l'interazione con il database.
 */
class Playlist
{

    private static $db;
    private static $table = "playlists"; // tabella da cui leggere/scrivere i dati


    /**
     * Costruttore della classe Playlist
     * prende la connessione PDO e la assegna alla proprietà statica $db.
     */
    public function __construct($dbInstance)
    {
        self::$db = $dbInstance;
    }



    /**
     * 01.1 Metodo per leggere tutte le playlist presenti nella tabella. (READ)
     * 
     * @return array|false ritorna un array associativo con tutte le playlist o `null` se non esistono.
     */
    public static function readAllPlaylists()
    {
        try {
            // query per ottenere tutte le righe dalla tabella "playlists", riceverà come risultato un array associativo
            $stmt = self::$db->query('SELECT * FROM ' . self::$table);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (!$result) {
                return false;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }



    /**
     * 01.2 Metodo per leggere una playlist specifica in base all'ID. (READ ID)
     * 
     * @param int $id ID della playlist
     * @return array|false ritorna un array associativo con i dati della playlist o `null` se non trovata.
     */
    public static function readPlaylistById($data)
    {
        try {
            // query per ottenere una playlist specifica in base all'ID, riceverà come risultato un array associativo
            $stmt = self::$db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
            $stmt->execute(['id' => $data['id']]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$result) {
                return false;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }


    /**
     * 01.3 Metodo per leggere le playlist di uno specifico utente, in base al suo id. (READ ID_USER)
     * 
     * @param int $id ID dell'user
     * @return array|false ritorna un array associativo con i dati delle playlist dell'utente o `null` se non trovata.
     */
    public static function readPlaylistByUserId($user_id)
    {
        try {
            $stmt = self::$db->prepare('SELECT * FROM ' . self::$table . ' WHERE user_id = :user_id');
            $stmt->execute(['user_id' => $user_id['user_id']]);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (!$result) {
                return false;
            }

            return $result;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }



    /**
     * 02. Metodo per creare una nuova playlist nel database. (POST)
     * 
     * @param array $data dati della nuova playlist (user_id, title, cover_image)
     * @return bool|string ritorna true se la creazione è avvenuta con successo, altrimenti ritorna l'errore.
     */
    public static function createPlaylist($data)
    {
        try {
            // query per l'inserimento di una nuova playlist
            $stmt = self::$db->prepare('INSERT INTO ' . self::$table . ' (user_id,title,cover_image) VALUES (:user_id, :title, :cover_image)');
            $result = $stmt->execute([
                'user_id' => $data["user_id"],          // `ID` dell'utente proprietario della playlist
                'title' => $data["title"],              // `titolo` della playlist
                'cover_image' => $data["cover_image"],  // `immagine` di copertina
            ]);

            if (!$result) {
                return false;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }



    /**
     * 03. Metodo per aggiornare campi specifici di una playlist nel database. (PATCH)
     * 
     * @param int $id ID della playlist da aggiornare
     * @param array $newData dati aggiornati della playlist
     * @return bool|string ritorna true se l'aggiornamento è avvenuto con successo, altrimenti ritorna l'errore.
     */
    public static function updatePlaylist($id, $newData)
    {

        // costruzione dinamica della query di aggiornamento
        $queryParams = [];
        $params = [];

        // aggiungi ogni campo che è != `null`
        foreach ($newData as $key => $value) {
            if ($value !== null) {
                array_push($queryParams, "$key = :$key");
                $params[$key] = $value;
            }
        }

        // unione dei campi in una stringa separata
        $queryParams = implode(', ', $queryParams);

        try {
            // prepara la query con i parametri per poi eseguirla succcessivamente
            $stmt = self::$db->prepare('UPDATE ' . self::$table . ' SET ' . $queryParams . ' WHERE id = :id');
            $params['id'] = $id;
            $result = $stmt->execute($params);

            if (!$result) {
                return;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }



    /**
     * 04. Metodo per sostituire completamente una playlist nel database. (PUT)
     * 
     * @param int $id ID della playlist da sostituire
     * @param array $newData dati della nuova playlist
     * @return bool|string ritorna true se la sostituzione è avvenuta con successo, altrimenti ritorna l'errore.
     */
    public static function replacePlaylist($id, $newData)
    {
        try {
            // query per sostituire completamente i dati della playlist con nuovi dati.
            $stmt = self::$db->prepare('UPDATE ' . self::$table . ' SET id = :id, title = :title, user_id = :user_id, cover_image = :cover_image WHERE id = :id');
            $result = $stmt->execute([
                'id' => $id,
                'title' => $newData['title'],
                'user_id' => $newData['user_id'],
                'cover_image' => $newData['cover_image'],
            ]);

            if (!$result) {
                return;
            }

            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }



    /**
     * 05. Metodo per eliminare una playlist dal database. (DELETE)
     * 
     * @param int $id ID della playlist da eliminare
     * @return bool|string ritorna true se l'eliminazione è avvenuta con successo, altrimenti ritorna l'errore.
     */
    public static function delete($id)
    {
        try {
            // query per eliminare una playlist in base all'ID relativo ad essa
            $stmt = self::$db->prepare('DELETE FROM ' . self::$table . ' WHERE id = :id');
            $result = $stmt->execute(['id' => $id]);

            if (!$result) {
                return;
            }
            return $result;
        } catch (\PDOException $e) {
            // errore, ritorna il messaggio dell'eccezione
            return $e->getMessage();
        }
    }
}
