# Tema: Playlist di Video YouTube


## Struttura delle Cartelle del Progetto

La seguente descrizione spiega il ruolo di ciascuna cartella e file nella struttura del progetto:

### `api/`
Questa cartella contiene i file relativi alle **API** del progetto. I file qui gestiscono le richieste HTTP (GET, POST, PUT, DELETE) per l'accesso ai dati, forniti in formato **JSON**.

- **playlist.php**: Gestisce le operazioni relative alle playlist tramite API, come creare, aggiornare, eliminare o visualizzare playlist in formato JSON.

### `app/`
Questa è la cartella principale dove risiede la logica dell'applicazione. Segue il pattern **MVC** e contiene:

- **controllers/**: Contiene i **controller**, responsabili per la logica applicativa e l'interazione tra il **modello** (dati) e la **vista** (UI).
    - **PlaylistController.php**: Gestisce le operazioni sulle playlist (es. creazione, modifica, eliminazione).
    - **UserController.php**: Gestisce le operazioni legate agli utenti, come il login, la registrazione, e la gestione delle sessioni.
    - **VideoController.php**: Gestisce le operazioni sui video delle playlist.

- **models/**: Contiene le classi che rappresentano i dati dell'applicazione e la logica di interazione con il database.
    - **Playlist.php**: Modello che rappresenta una playlist e contiene la logica per le operazioni CRUD (Create, Read, Update, Delete) sul database, come se fosse un file DAO.
    - **User.php**: Modello che rappresenta un utente e gestisce l'autenticazione e le informazioni sugli utenti.
    - **Video.php**: Modello che rappresenta un video all'interno di una playlist.

- **views/**: Contiene i file di **vista**, responsabili della visualizzazione dei dati all'utente.
    - **playlist/**
        - **create.php**: Pagina per la creazione di una nuova playlist.
        - **index.php**: Pagina principale che elenca tutte le playlist disponibili.
    - **user/**
        - **login.php**: Pagina di login per l'accesso degli utenti.

### `config/`
Contiene file di configurazione importanti per il progetto.

- **database.php**: Gestisce la connessione al database MySQL tramite **PDO**, PDO è una classe PHP che permette di connettersi e interagire con diversi database. In questo caso, si usa il driver MySQL.

- **routes.php**: Definisce le rotte (URL) del progetto e collega le richieste ai relativi controller.

### `public/`
Cartella accessibile pubblicamente, solitamente contiene file statici e l'entry point dell'applicazione.

- **uploads/**: Cartella dedicata al caricamento dei file da parte degli utenti, ad esempio le immagini di copertina delle playlist.
     - **images/**: Sottocartella specifica per le immagini caricate.

- **index.php**: Il file principale che serve come entry point per l'applicazione web. Gestisce tutte le richieste e le reindirizza ai controller appropriati in base alle rotte definite.

- **test-db-connection.php**: File creato unicamente per testare se la connessione al Database è andata a buon fine oppure no.

## Utilizzo di composer
In un progetto PHP, Composer è un gestore di dipendenze che facilita l'installazione e la gestione delle librerie e dei pacchetti di terze parti. Vediamo nel dettaglio a cosa servono i file principali generati da Composer, come il file composer.json e la cartella vendor.

- composer.json: Definisce le dipendenze e le configurazioni del progetto.
- composer.lock: Blocca le versioni esatte delle dipendenze per garantire coerenza.
- vendor/: Contiene tutte le dipendenze installate e l'autoloader generato da Composer.

## Utilizzo di htaccess
è un file di configurazione utilizzato dal server web Apache. Esso permette di controllare vari aspetti del funzionamento del server per le directory in cui è presente e per le loro sottodirectory. Viene spesso utilizzato per impostare regole di riscrittura degli URL, gestire la sicurezza, configurare reindirizzamenti e molto altro, senza dover modificare la configurazione globale di Apache.

### namespace: 
è un modo per organizzare il codice e prevenire conflitti tra nomi di classi. In questo caso, la classe Database è inserita nel namespace Config. Quindi, quando vorrai utilizzare questa classe altrove, dovrai referenziarla come Config\Database.

### a cosa serve in questo progetto?
Il file .htaccess, è usato per riscrivere URL specifici, rendendoli più "puliti" e facili da leggere. Apache utilizza il modulo mod_rewrite per farlo, e il codice che hai condiviso serve proprio a questo scopo.