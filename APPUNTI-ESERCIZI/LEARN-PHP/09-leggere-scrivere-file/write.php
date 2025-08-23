<!-- ecco la lista dei vari modi di come possiamo apire un files:

   r	Open the file for reading only.
   r+	Open the file for reading and writing.
   w	Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.
   w+	Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
   a	Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
   a+	Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
   x	Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
   x+	Open the file for reading and writing; otherwise it has the same behavior as 'x'.
   
scrivere un file con:
- 
-
-->

<?php

// file che collegheremo (inseriamo il path)
$nomeFile = "notes.txt";

// testo che andrà a modificare tutto il notes.txt
$testoNuovo = "ciao ho modificato tutto il tuo file :)";



if (file_exists($nomeFile)) {

    //? fwrite(); 
    // creiamo la referenza al file e andiamo ad aprirlo scrivendolo tramite "w"
    $file = fopen($nomeFile, "w");

    // con questa linea di codice, andremo a modificare il file di testo con il nuovo testo inserito QUANDO APRIAMO QUESTA PAGINA O LA RIAGGIORNIAMO!
    fwrite($file, $testoNuovo);


    // andiamo a chiudere la reference che ha aperto il file
    fclose($file);
} else {
    echo "ERRORE";
}



?>