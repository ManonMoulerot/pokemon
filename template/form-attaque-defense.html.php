<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
?>
<form action="admin.php" method="GET">
    <?php
    echo $form->inputHidden('hidden','text');
    $listeType = $pokemon->selectionType();
    require ('template/ajout-attaques.html.php');
    $listeType = $pokemon->selectionType();
    require ('template/ajout-defense.html.php');
     echo $form->submit();
?>
</form>

