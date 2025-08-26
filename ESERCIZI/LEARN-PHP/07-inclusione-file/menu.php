<!-- questo file LO ANDIAMO AD INSERIRE (includere) all'interno di tutte le sezione della pagina!!:
 sull'index, contatti, about ...
 
 perchè tutti questi file hanno LO STESSO MENU DI BLOCCO DI CODICE, ècomodo creare un file unico cosi se 
 c'è un problema in questo menu, evitiamo di cambiarlo in ognuno di questi file citati!! -->

<a href="./index.php">HOME</a>
<a href="./contatti.php">CONTATTI</a>
<a href="./about.php">ABOUT</a>
<!-- ora possiamo usare la funzione dell'altro file!! -->
<p>
    <?php salutaTutti($saluti); ?>
</p>