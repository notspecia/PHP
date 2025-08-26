<?php

class Minerale
{
    public $nome;
    public $tipo;

    public function stampaScheda()
    {
        return "Questo bellissimo minerale della collezione si chiama " .
            $this->nome . "ed è di tipo " . $this->tipo . "";
    }
}