<?php

namespace App\Views;



/* Class View, La funzione principale di questo file 
è di fornire un'interfaccia per le viste dell'applicazione, 
consentendo di renderizzare le pagine HTML e di gestire le richieste dell'utente. */

class View
{

    // pagina principale di benvenuto che permette all'utente di effetuare diverse operazioni
    public function indexView()
    {
        require __DIR__ . '/playlist/index.php';
    }


    // pagina per la creazione di una nuova playlist
    public function storeView()
    {
        require __DIR__ . '/playlist/create.php';
    }


    // pagina che permette all'utente di effettuare il login
    public function loginView()
    {
        require __DIR__ . '/user/login.php';
    }


    // pagina che permette all'utente di registrarsi
    public function registerView()
    {
        require __DIR__ . '/user/register.php';
    }
}
