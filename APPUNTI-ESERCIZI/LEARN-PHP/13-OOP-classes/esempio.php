<?php

/*classe persona --> una persona ha delle variabili che indicano quella persona
EX: nome, cognome, eta, interessi, METODI(saluta) 

ASTRAZIONE --> andare a prende un oggetto dalla realtà e usarlo in programmazione*/





/* da una classe possiamo creare degli oggetti (ex una persona1) persona1 ha un:
!CLASSE PERSONA
- nome: luca
- cognome: rossi
- eta: 22
- interessi: calcio alpinaggio
- .saluta(ciao sono luca)

si possono usare le classi come STAMPINO per utilizzarle per creare infinite persone */




/* ma le classi hanno anche l'utilità di creare delle SOTTOCLASSI, ex una persona
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
ma andiamo a sovrascriverle con lo stesso metodo della sottoclasse! */