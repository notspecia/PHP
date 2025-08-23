<?php


namespace SP\model;

//? definiamo le proprietà e i comportamenti (metodi) di un oggetto. È la struttura base che ti permette di creare oggetti con caratteristiche comuni.
class Prodotto
{

    private bool $disponibile;

    /* usando la sintassi compatta introdotta in PHP 8.0.
    
    - public function __construct(): È il costruttore della classe. Viene chiamato quando crei una nuova istanza della classe.

    - private int $id, private string $nome, private string $descrizione, private float $prezzo: 
    Questi parametri non solo dichiarano i dati che devono essere passati al costruttore, ma allo stesso tempo definiscono 
    e inizializzano le proprietà della classe.

    - private: queste proprietà sono accessibili solo all'interno della classe stessa (incapsulamento).

    - int, string, float: Definiscono i tipi di dati che i parametri devono essere (intero, stringa e float rispettivamente).
    PHP si occupa automaticamente di assegnare i valori passati al costruttore alle proprietà corrispondenti, 
    eliminando la necessità di scrivere manualmente $this->id = $id;, $this->nome = $nome;, ecc... */

    public function __construct(

        // le proprietà sono dichiarate e inizializzate nel costruttore
        private int $id,
        private string $nome,
        private ?string $descrizione, //* con ? -> può essere "STRING" / "NULL"
        private float $prezzo
    ) {
        // inizializziamo la proprietà disponibile come true di default
        $this->disponibile = true;
    }



    // ! GETTERS -------------------------------------------

    // questo è un metodo che RITORNERA una stringa
    public function getNome(): string
    {
        return $this->nome;
    }

    // questo è un metodo che RITORNERA un float
    public function getPrezzo(): float
    {
        return $this->prezzo;
    }

    // un metodo magico che consente di accedere dinamicamente a qualsiasi proprietà della classe
    public function __get($name)
    {
        return $this->$name;
    }
}
