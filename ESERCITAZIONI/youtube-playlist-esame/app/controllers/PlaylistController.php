<?php

namespace App\Controllers;

use App\Models\Playlist;



class PlaylistController
{


    //! READ REQUESTS
    /**
     * Visualizza un elenco di tutte le playlist.
     *
     * @return array elenco delle playlist
     */
    public function getAllPlaylists()
    {
        $allPlaylists = Playlist::readAllPlaylists();
        return $allPlaylists;
    }


    /**
     * Visualizza una playlist in base all'ID fornito.
     *
     * @param int $data l'ID della playlist da visualizzare
     * @return array i dettagli della playlist
     */
    public function getPlaylistById($data)
    {
        $playlist = Playlist::readPlaylistById($data);
        return $playlist;
    }


    /**
     * Visualizza tutte le playlist di un utente specifico.
     *
     * @param int $userId l'ID dell'utente di cui si vogliono visualizzare le playlist
     * @return array le playlist associate all'utente
     */
    public function getPlaylistsByUserId($userId)
    {
        $playlist = Playlist::readPlaylistByUserId($userId);
        return $playlist;
    }



    //! POST REQUEST
    /**
     * Crea una nuova playlist con i dati forniti.
     *
     * @return array messaggio di successo o errore durante la creazione
     */
    public function createPlaylist()
    {
        session_start();

        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        $data = [
            'user_id' => $_SESSION['user_id'] ?? null,
            'title' => $inputData['title'] ?? $_POST['title'] ?? null,
            'cover_image' => $this->uploadCoverImage() ?? null,
        ];

        var_dump($data);

        if (!empty($data['user_id']) && !empty($data['title'])) {
            // -1 to prevent error, database change the id
            $playlist = Playlist::createPlaylist($data);

            if (empty($playlist)) {
                return ['error' => 'error during creation'];
            } elseif (is_string($playlist)) {
                return ['error' => 'error in database'];
            } else {
                return ['message' => 'playlist created'];
            }
        } else {
            return ['error' => 'missing required fields'];
        }
    }

    

    //! PATCH REQUEST
    /**
     * Aggiorna una playlist esistente con i nuovi dati forniti.
     *
     * @param int $data l'ID della playlist da aggiornare
     * @return array messaggio di successo o errore durante l'aggiornamento
     */
    public function updatePlaylist($data)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        $newData = [
            'user_id' => $inputData['user_id'] ?? $_PATCH['user_id'] ?? null,
            'title' => $inputData['title'] ?? $_PATCH['title'] ?? null,
            'cover_image' => $inputData['cover_image'] ?? $_PATCH['cover_image'] ?? null,
        ];

        if (!empty($newData['user_id']) || !empty($newData['title']) || !empty($newData['cover_image'])) {
            $playlist = Playlist::updatePlaylist($data, $newData);
            if (empty($playlist)) {
                return ['error' => 'error during updating'];
            } elseif (is_string($playlist)) {
                return ['error' => 'error in database'];
            } else {
                return ['message' => 'playlist updated'];
            }
        } else {
            return ['error' => 'missing required fields'];
        }
    }



    //! PUT REQUEST
    /**
     * Sostituisce i dati di una playlist esistente con quelli forniti.
     *
     * @param int $data l'ID della playlist da sostituire
     * @return array messaggio di successo o errore durante la sostituzione
     */
    public function replacePlaylist($data)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        $newData = [
            'user_id' => $inputData['user_id'] ?? $_PATCH['user_id'] ?? null,
            'title' => $inputData['title'] ?? $_PATCH['title'] ?? null,
            'cover_image' => $inputData['cover_image'] ?? $_PATCH['cover_image'] ?? null,
        ];

        if (!empty($newData['user_id']) && !empty($newData['title']) && !empty($newData['cover_image'])) {
            $playlist = Playlist::replacePlaylist($data, $newData);
            if (empty($playlist)) {
                return ['error' => 'error during updating'];
            } elseif (is_string($playlist)) {
                return ['error' => 'error in database'];
            } else {
                return ['message' => 'playlist updated'];
            }
        } else {
            return ['error' => 'missing required fields'];
        }
    }



    //! DELETE REQUEST
    /**
     * Elimina una playlist specificata dall'ID.
     *
     * @param int $data l'ID della playlist da eliminare
     * @return array messaggio di successo o errore durante l'eliminazione
     */
    public function deletePlaylist($data)
    {
        $playlist = Playlist::delete($data);

        if (empty($playlist)) {
            return ['error' => 'error during deleting'];
        } elseif (is_string($playlist)) {
            return ['error' => 'error in database'];
        } else {
            return ['message' => 'playlist deleted'];
        }
    }



    /**
     * Gestisce l'upload dell'immagine di copertura per una playlist. (private!)
     *
     * @return string|null il percorso dell'immagine caricata o null in caso di errore
     */
    private function uploadCoverImage()
    {
        if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
            $targetDir = "uploads/cover_images";
            $targetFile = $targetDir . basename($_FILES["cover_image"]["name"]);
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], $targetFile);
            return $targetFile;
        }
        return null;
    }
}
