<?php

// aggiungi al namespace Api\Playlist da utilizzare successivamente nelle routes.php
namespace Api;

use App\Controllers\PlaylistController;



class Playlist
{
    private $playlistController;


    public function __construct()
    {
        $this->playlistController = new PlaylistController();
    }



    /**
     * Recupera tutte le playlist.
     *
     * @return void
     */
    public function getAllPlaylists()
    {
        $allPlaylists = $this->playlistController->getAllPlaylists();
        echo json_encode($allPlaylists);
    }


    /**
     * Recupera una playlist specifica in base all'ID.
     *
     * @param int $data
     */
    public function getPlaylistById($data)
    {
        $playlist = $this->playlistController->getPlaylistById($data);
        echo json_encode($playlist);
    }


    /**
     * Recupera le playlist di un utente specifico dal suo ID_USER.
     *
     * @param int $userId
     */
    public function getPlaylistsByUserId($userId)
    {
        $playlists = $this->playlistController->getPlaylistsByUserId($userId);
        echo json_encode($playlists);
    }



    /**
     * Crea una nuova playlist.
     *
     */
    public function postPlaylist()
    {
        $result = $this->playlistController->createPlaylist();
        echo json_encode($result);
    }



    /**
     * Aggiorna una playlist esistente.
     *
     * @param int $data
     */
    public function patchPlaylist($data)
    {
        $result = $this->playlistController->updatePlaylist($data);
        echo json_encode($result);
    }



    /**
     * Sostituisce una playlist esistente.
     *
     * @param int $data
     */
    public function putPlaylist($data)
    {
        $result = $this->playlistController->replacePlaylist($data);
        echo json_encode($result);
    }



    /**
     * Elimina una playlist specifica.
     *
     * @param int $data
     */
    public function delPlaylist($data)
    {
        var_dump($data);
        $result = $this->playlistController->deletePlaylist($data);
        // echo json_encode($result);
    }
}
