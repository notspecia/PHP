<!-- ecco la lista dei vari modi di come possiamo apire un files:

   r	Open the file for reading only.
   r+	Open the file for reading and writing.
   w	Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.
   w+	Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
   a	Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
   a+	Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
   x	Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
   x+	Open the file for reading and writing; otherwise it has the same behavior as 'x'.
   
leggere un file con:
- fread -> ci permette di andare a leggere il file specificando prima la reference e dopo il numero di caratteri da leggi, oppure tutti tramite filesize(...)
- file_get_contents -> ci permette di aprire e legggere direttamente TUTTO IL FILE senza creare la reference di apertura -->

<?php

// file che collegheremo (inseriamo il path)
$nomeFile = "notes.txt";



/* mettiamo un CHECK (if statement) per vedere se il file esiste nella repo
FARE IL CONTROLLO SOLO PER "r" e "x" */
if (file_exists($nomeFile)) {

    //? 01. fread(); 
    // creiamo la referenza al file e andiamo ad aprirlo leggendolo solo "r"
    $file = fopen($nomeFile, "r");


    // // andiamo a LEGGERE IL file, il 2 valore indica QUANTI CARATTERI VERRANNO LETTI!
    // $content = fread($file, "15");
    // echo $content . "<br>";

    // // se volessimo leggere tutto il files usiamo filesize($nomeFile);
    // $allContent = fread($file, filesize($nomeFile));
    // echo $allContent . "<br>";

    // // andiamo a chiudere la reference che ha aperto il file
    // fclose($content);



    //? 02. file_get_contents(); 
    // andiamo a leggere DIRETTAMNTE IL FILE senza il bisogno nemmeno di aprirlo! inserire dirretamente il $fileName
    $content = file_get_contents($nomeFile);
    echo $content;
} else {
    echo "ERRORE";
}



?>