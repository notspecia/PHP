<?php

namespace App\Controllers;

use App\Models\Playlist;


class PlaylistController
{

    /**
     * Mostra un elenco di tutte le playlist,
     * recupera tutte le playlist dal database e le restituisce. (READ)
     *
     * @return array
     */
    public function getAllPlaylists()
    {
        $allPlaylists = Playlist::read();
        return $allPlaylists;
    }


    /**
     * Mostra una playlist in base all'ID,
     * recupera una specifica playlist dal database in base all'ID fornito nella richiesta. (READ ID)
     *
     * @param int $id
     * @return array|null
     */
    public function getPlaylistByID($id)
    {
        $playlist = Playlist::readById($id);
        return $playlist;
    }


    /**
     * Salva una nuova playlist,
     * accetta i dati di input per creare una nuova playlist, valida i dati e li memorizza nel database. (POST)
     *
     * @return array
     */
    public function postPlaylist()
    {
        // recupera i dati di input dalla richiesta POST
        $inputData = $this->getInputData();

        // validazione dei dati di input
        if ($this->validateData($inputData)) {

            // crea la playlist nel database
            $playlist = Playlist::create($inputData);

            if (empty($playlist)) {
                return ['error' => 'errore durante la creazione'];
            } elseif (is_string($playlist)) {
                return ['error' => 'errore nel database'];
            } else {
                return ['message' => 'playlist creata'];
            }
        } else {
            return ['error' => 'campi obbligatori mancanti'];
        }
    }


    /**
     * Aggiorna una playlist esistente,
     * accetta l'ID e i dati aggiornati per modificare una playlist nel database. (PATCH)
     *
     * @param int $id
     * @return array
     */
    public function putPlaylist($id)
    {
        // recupera i dati di input dalla richiesta PATCH
        $inputData = $this->getInputData();

        // prepara i nuovi dati per l'aggiornamento
        $newData = [
            'user_id' => $inputData['user_id'] ?? null,
            'title' => $inputData['title'] ?? null,
            'cover_image' => $inputData['cover_image'] ?? null,
        ];

        // verifica se ci sono dati da aggiornare
        if (!empty($newData['user_id']) || !empty($newData['title']) || !empty($newData['cover_image'])) {
            $playlist = Playlist::update($id, $newData);

            if (empty($playlist)) {
                return ['error' => 'errore durante l\'aggiornamento'];
            } elseif (is_string($playlist)) {
                return ['error' => 'errore nel database'];
            } else {
                return ['message' => 'playlist aggiornata'];
            }
        } else {
            return ['error' => 'campi obbligatori mancanti'];
        }
    }


    /**
     * Sostituisce una playlist esistente,
     * accetta l'ID e i nuovi dati per sostituire completamente una playlist nel database.  (PUT)
     *
     * @param int $id
     * @return array
     */
    public function patchPlaylist($id)
    {
        // recupera i dati di input dalla richiesta PUT
        $inputData = $this->getInputData();

        // prepara i nuovi dati per la sostituzione
        $newData = [
            'user_id' => $inputData['user_id'] ?? null,
            'title' => $inputData['title'] ?? null,
            'cover_image' => $inputData['cover_image'] ?? null,
        ];

        // verifica che tutti i dati necessari siano forniti
        if (!empty($newData['user_id']) && !empty($newData['title']) && !empty($newData['cover_image'])) {
            $playlist = Playlist::replace($id, $newData);

            if (empty($playlist)) {
                return ['error' => 'errore durante l\'aggiornamento'];
            } elseif (is_string($playlist)) {
                return ['error' => 'errore nel database'];
            } else {
                return ['message' => 'playlist aggiornata'];
            }
        } else {
            return ['error' => 'campi obbligatori mancanti'];
        }
    }


    /**
     * Elimina una playlist,
     * accetta l'ID di una playlist e la rimuove dal database. (DELETE)
     *
     * @param int $id
     * @return array
     */
    public function deletePlaylist($id)
    {
        $playlist = Playlist::delete($id);

        if (empty($playlist)) {
            return ['error' => 'errore durante la cancellazione'];
        } elseif (is_string($playlist)) {
            return ['error' => 'errore nel database'];
        } else {
            return ['message' => 'playlist eliminata'];
        }
    }


    /**
     * Funzione per gestire il caricamento dell'immagine di copertina.
     * (Questa funzione deve ancora essere implementata)
     */
    public function uploadImage() {}

    /**
     * Recupera i dati di input dalla richiesta.
     *
     * @return array
     */
    private function getInputData()
    {
        $jsonInput = file_get_contents('php://input');
        return json_decode($jsonInput, true);
    }

    /**
     * Valida i dati forniti per la creazione e l'aggiornamento delle playlist.
     *
     * @param array $data
     * @return bool
     */
    private function validateData($data)
    {
        return !empty($data['user_id']) && !empty($data['title']) && !empty($data['cover_image']);
    }
}
