<?php
//* introduzione alla programmazione ad oggetti (OOP - Object Oriented Programming)

/*
classe persona --> una persona ha delle variabili che indicano quella persona
EX: nome, cognome, eta, interessi, METODI(saluta) 

ASTRAZIONE --> andare a prende un oggetto dalla realtà e usarlo in programmazione
*/




/* 
da una classe possiamo creare degli oggetti (ex una persona1) persona1 ha un:
!CLASSE PERSONA
- nome: luca
- cognome: rossi
- eta: 22
- interessi: calcio alpinaggio
- .saluta(ciao sono luca)

si possono usare le classi come STAMPINO per utilizzarle per creare infinite persone 
*/




/* 
ma le classi hanno anche l'utilità di creare delle SOTTOCLASSI, ex una persona
ci puo (ex: insegnante) lo possiamo utilizzare come STAMPINO per creare degli oggetti INSEGNANTI (che fanno parte della classe persona)
ma anche altri come STUDENTI

continuando l'esempio della creazione di persona1:


!CLASSE PERSONA (l'insegnante eredita i dati della persona!!)
?SOTTOCLASSE INSEGNANTE 
- materia
-. saluta(ciao sono "nome" "cognome" e insegno "materia")


!CLASSE PERSONA (lo studente eredita i dati della persona!!)
?SOTTOCLASSE STUDENTE
- classe
- voti
-. saluta(ciao bro sono "nome")

X I METODI --> andiamo a prendere i metodi dalla persona 
ma andiamo a sovrascriverle con lo stesso metodo della sottoclasse!
*/



/*
!REGOLE PER USARE LE CLASSI {}
- per creare una classe si usa la parola chiave class
- per creare un oggetto/istanza si usa la parola chiave new
- per accedere e assegnare le proprietà di un oggetto si usa la freccia ->
- utilizzare i costruttori per inizializzare le proprietà di un oggetto al momento della creazione, evitando di doverle assegnare manualmente una per una
- il $this si riferisce all'oggetto CORRENTE, e serve per accedere alle proprietà e ai metodi dell'oggetto all'interno della classe
- differenze tra PUBLIC / PROTECTED / PRIVATE
    TIPO 	        DOVE SI USA	                        ACCESSO
    *public	        dentro e fuori dalla classe	        libero
    ?protected	    dentro la classe e le sottoclassi	limitato
    !private	    solo dentro la classe	            privato
- uso dei getter e setter:
    - Permettono di proteggere proprietà private/protected
    - Consentono di aggiungere logica prima di leggere o scrivere valori (es. validazioni)
    - Mantengono l’incapsulamento, principio fondamentale dell’OOP
*/ 