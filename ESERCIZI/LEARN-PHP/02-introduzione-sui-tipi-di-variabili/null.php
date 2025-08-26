<!-- INTRODUZIONE valori NULL
In PHP, NULL rappresenta una variabile senza valore. Una variabile è considerata NULL 
se le è stato assegnato il valore NULL, se non è stata definita, 
o se è stata disattivata con unset().
+ INFORMAZIONI SUL FILE  "operators.php" -->

<!-- casi per valori vuoti come:
"", "0", 0, 0.0, null, false, array() -->

<!-- la funzione is_null($var): Verifica se una $variabile è NULL. 
Restituisce 1 (vero). Restituisce spazio vuoto (falso) -->

<!-- la funzione isset($var): verifica se una variabile è definita e non è NULL.-->

<!-- empty($variabile): Funzione che verifica se $variabile è vuota. 
Restituisce true nei casi per valori "vuoti" come:
"", "0", 0, 0.0, null, false, array() -->



<?php

// assegnazione di un valore null, a delle variabili
$var1 = null;
$var2 = "";

//var1 null?  
echo is_null($var1) . "<br />"; //output 1 (true)

//var2 null?  
echo is_null($var2), "<br />"; // output spazio vuoto (false)

// var3 null?
echo is_null($var3), "<br />"; //warning + output 1 (true)
?>


<br />
<br />


<?php

// var1 is set?  
echo isset($var1), "<br />"; // output spazio vuoto (false)

// var2 is set?  
echo isset($var2), "<br />"; //output 1 (true)

// var3 is set?  
echo isset($var3), "<br />"; // output spazio vuoto (false)

?>