<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
?>
<form action="admin.php" method="get">
    <?php 
    $listeType = $pokemon->selectionType();
    require ('template/liste-type-ajout.html.php');
    echo $form->submit();
    ?>
</form>

