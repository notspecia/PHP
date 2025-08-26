<?php

// Include il file Studente.php che contiene la definizione della classe Studente
include_once '../model/Studente.php';


class StudentiCtrl
{
    // Attributo PRIVATO che contiene un array di oggetti Studente
    private array $studenti = [];

    // Funzione per caricare i dati degli studenti da un file CSV (../docs/studenti.csv)
    function carica($filename = '../docs/studenti.csv'): void
    {

        $studenti_file = file($filename);

        // iterazione su ogni riga del file CSV
        foreach ($studenti_file as $studenti_riga) {
            $nome_cognome = explode(',', $studenti_riga);
            $studente_temp = new Studente($nome_cognome[0], $nome_cognome[1]);
            $this->studenti[] = $studente_temp;
        }
    }

    // Funzione per scrivere i dati degli studenti in un file di testo
    function scrivi($destinazione = '../docs/studenti_numerati.txt'): void
    {
        $file = fopen($destinazione, 'w');

        // Itera sull'array degli studenti
        foreach ($this->studenti as $studente) {
            fwrite($file, $studente);
        }
        fclose($file);
    }


    // Funzione per restituire l'array degli studenti caricati
    function getStudenti(): array
    {
        return $this->studenti;
    }
}
