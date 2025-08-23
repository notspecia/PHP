<!-- andiamo a creare la logica del todo in un file di configurazione -->
<?php
include("./00-configurazione.php");
?>



<!-- se abbiamo passato il login e siamo dentro la sessione... -->
<h1>pagina TOP SECRET</h1>

<form action="#" method="post">
    <input type="text" name="todo" id="todo" placeholder="todo">
    <input type="submit" value="ADD">
</form>



<!-- metodo di combinazione per fare una lista  -->
<ul>

    <!-- iteriamo su ogni elemento di $_SESSION["todolist" per visualizzarli come elementi di lista (<li>) 
    all'interno di un elenco non ordinato (<ul>)-->
    <?php foreach ($_SESSION["todolist"] as $todo) : ?>
        <li> <?php echo " " . $todo . "<br>"; ?> </li>
    <?php endforeach ?>

</ul>