<?php

// per utilizzare classi random da estendere a quella principale di insegnante
require_once "./personClasses.php";


// CLASSE PERSONA (stampino)
class Persona {

    // proprietà
    public $nome;
    public $cognome;
    protected $eta;
    private $email;

    // costruttore per inizializzare le proprietà
    public function __construct($nome, $cognome, $eta, $email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->email = $email;
    }

    // metodi
    public function saluta() {
        return "Ciao io sono $this->nome $this->cognome e ho $this->eta anni scrivimi pure sulla mia email: $this->email";
    }

    // getters e setter x modifica e accesso a proprietà private / protected
    public function getEta() { 
        return $this->eta;
    }

    protected function getEmail() { 
        return $this->email;
    }

}



// -------------------------------------------------------------
// // creiamo un OGGETTO (istanza) della classe Persona
// $persona1 = new Persona();

// // assegniamo i valori alle proprietà dell'oggetto (MODO ERRATO)
// $persona1->nome = "Gabriele"; 
// $persona1->cognome = "Rossi";
// $persona1->eta = 19;
// $persona1->email = "johndoe@gmail.com";

// // stampiamo l'oggetto istanza dell classe Persona
// var_dump($persona1); 
// -------------------------------------------------------------
?>

<h1>Persona classe</h1>

<?php
// -------------------------------------------------------------
// creiamo un altro OGGETTO (istanza) della classe Persona tramite il __costruttore
$persona2 = new Persona("Gabriele", "Speciale", 20, "gabspec@gmail.com");

// stampiamo l'oggetto istanza dell classe Persona in var_dump
var_dump($persona2); 

// testing proprietà + metodi della classe
echo "<br><br> il mio nome è fuori dalla classe $persona2->nome <br><br>";
echo "fuori dalla classe evoco metodo() " . $persona2->saluta() . "<br><br>";
// -------------------------------------------------------------
?>


<br><br>
<hr>
<br><br>
<h1>Persona + Professore classi</h1>


<?php
// -------------------------------------------------------------
// creiamo un OGGETTO della classe Prof che estende Persona con comunicazione tra i __costruttori tramite parent::
$profMigliore = new Prof("Luca", "Bianchi", 46, "luke4316@gmail.com", "Storia");

// stampiamo l'oggetto istanza dell classe Prof + Persona in var_dump
var_dump($profMigliore); 

// testing proprietà + metodi della classe
echo "<br><br> la mia materia ed eta è fuori dalla classe: $profMigliore->nome " . $profMigliore->getEta() .  " anni <br><br>";
echo "fuori dalla classe evoco metodo() " . $profMigliore->salutoProfessionale();
// -------------------------------------------------------------
?>


<br><br>
<hr>
<br><br>
<h1>Persona + Studente classi</h1>


<?php
// -------------------------------------------------------------
// creiamo un OGGETTO della classe Studente che estende Persona con comunicazione tra i __costruttori tramite parent::
$studenteBullo = new Studente("Gennaro", "Bluue", 10, "genny@bully.com", "Xbox 360", "Nuoto");

// stampiamo l'oggetto istanza dell classe Studente + Persona in var_dump
var_dump($studenteBullo); 

// testing proprietà + metodi della classe
echo "<br><br> il mio sport ed email è fuori dalla classe: $studenteBullo->sport e se hai problemi scrivimi sulla mia console " . $studenteBullo->console .  "<br><br>";
echo "fuori dalla classe evoco metodo() " . $studenteBullo->salutoBrody()  .  "<br><br>";
// -------------------------------------------------------------
?>