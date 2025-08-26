<?php

// classe estesa a persona con proprietà e metodi x i PROFESSORI
Class Prof extends Persona {

    // proprietà
    public $materia;

    // costruttore + costruttore del parent sopra Persona
    public function __construct($nome, $cognome, $eta, $email, $materia) {
        parent::__construct($nome, $cognome, $eta, $email);
        $this->materia = $materia;
    }

    // metodi
    public function salutoProfessionale () { 
        return "buondì ragazzi, sono il professore $this->nome $this->cognome ed insegno $this->materia come materia principale! se avete dubbi scrivete alla mia email: " . $this->getEmail();
    }
}



// classe estesa a persona con proprietà e metodi x gli studenti
Class Studente extends Persona {

    // proprietà
    public $console;
    public $sport;

    // costruttore + costruttore del parent sopra Persona
    public function __construct($nome, $cognome, $eta, $email, $console, $sport) {
        parent::__construct($nome, $cognome, $eta, $email);
        $this->console = $console;
        $this->sport = $sport;
    }

    // metodi
    public function salutoBrody () { 
        return "aoo bella rega sono $this->nome e faccio $this->sport e gioco alla $this->console, in totale ho $this->eta anni";
    }
}