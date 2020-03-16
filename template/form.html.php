<?php
    require_once('./models/Pokemon.php');

    $pokemon = new Pokemon();
?>
<form action="index.php" method="get">
    <?php 
    // echo $form->input('type','text');
    $listeType = $pokemon->selectionType();
    require ('template/listeType.html.php');
    echo $form->submit();
    ?>
</form>

