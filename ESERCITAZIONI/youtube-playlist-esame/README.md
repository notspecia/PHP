# ESERCIZIO Playlist di Video YouTube
YouTube Playlist
Questo è un progetto PHP che consente di creare, visualizzare e gestire le playlist di YouTube.
<br><br><br><br>

## Struttura delle Cartelle del Progetto

Il progetto è strutturato in modo da avere i seguenti file e cartelle:
<br><br>



### `api/`
Questa cartella contiene i file relativi alle **API** del progetto. I file qui gestiscono le richieste HTTP (GET, POST, PUT, DELETE) per l'accesso ai dati.

- **playlist.php**: serve come intermediario tra le richieste API e il controller PlaylistController, incapsulando le operazioni CRUD (Create, Read, Update, Delete) relative alle playlist.
<br><br>



### `app/`
Cartella principale del progetto, contiene i file di configurazione e le classi del progetto.

- **controllers/**: contiene i **controller**, responsabili per la logica applicativa e l'interazione tra il **modello** (dati) e la **vista** dell'utente (UI).

    - **PlaylistController.php**: gestisce le operazioni sulle playlist (es. creazione, modifica, eliminazione).

    - **UserController.php**: gestisce le operazioni legate agli utenti, come il login, la registrazione, e la gestione delle sessioni.


- **models/**: contiene le classi che rappresentano i dati dell'applicazione e la logica di interazione con il database.

    - **Playlist.php**: modello che rappresenta una playlist e contiene la logica per le operazioni CRUD (Create, Read, Update, Delete) sul database, come se fosse un file DAO.

    - **User.php**: modello che rappresenta un utente e gestisce l'autenticazione e le informazioni sugli utenti.


- **views/**: contiene i file di **vista**, responsabili della visualizzazione dei dati all'utente.

    - **playlist/**
        - **create.php**: pagina per la creazione di una nuova playlist.
        - **index.php**: pagina principale che elenca tutte le playlist disponibili.
    - **user/**
        - **login.php**: pagina di login per l'accesso degli utenti.
        - **register.php**: pagina di registrazione per permettere ad un utente di registrarsi.
<br><br>



### `config/`
Contiene file di configurazione importanti per il progetto.

- **database.php**: gestisce la connessione al database MySQL tramite **PDO**, PDO è una classe PHP che permette di connettersi e interagire con diversi database. In questo caso, si usa il driver MySQL.

- **routes.php**: definisce le rotte (URL) del progetto e collega le richieste ai relativi controller.
<br><br>



### `public/`
Cartella accessibile pubblicamente, solitamente contiene file statici e l'entry point dell'applicazione.

- **uploads/**: cartella dedicata al caricamento dei file da parte degli utenti, ad esempio le immagini di copertina delle playlist importate dagli utenti.

     - **images/**: Sottocartella specifica per le immagini caricate.

- **index.php**: il file principale che serve come entry point per l'applicazione web, gestisce tutte le richieste e le reindirizza ai controller appropriati in base alle rotte definite.

- **test-db-connection.php**: file creato unicamente per testare se la connessione al Database è andata a buon fine oppure no.

<br><br><br><br>




## Utilizzo di librerie eseterne



### `Utilizzo di composer`
Composer viene usato come gestore di dipendenze che facilita l'installazione e la gestione delle librerie e dei pacchetti di terze parti; come componenti principali all'interno del progetto viene usato:

- **composer.json**: definisce le dipendenze e le configurazioni del progetto.

- **composer.lock**: blocca le versioni esatte delle dipendenze per garantire coerenza.

- **vendor/**: contiene tutte le dipendenze installate e l'autoloader generato da Composer.

- **FastRoute/**: è una libreria PHP per il routing, che permette di gestire le rotte di un'applicazione web in modo rapido ed efficiente. È utile per abbinare le richieste `HTTP` (come GET, POST, PUT, DELETE) a specifici controller o metodi in base agli URL.
<br><br>







### `namespace`
è un modo per organizzare il codice e prevenire conflitti tra nomi di classi. <br> <br>
Ex: la classe Database è inserita nel `namespace Config`. Quindi, quando vorrai utilizzare questa classe altrove, dovrai referenziarla come use `Config\Database`, per definire i namespace li andiamo a formare all'interno del **composer.json**:

```
"psr-4": {
      "App\\": "app/",
      "Api\\": "api/",
      "Config\\": "config/"
    }
```

