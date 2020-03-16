<?php
    require_once('./models/Pokemon.php');

    $pokemon = new Pokemon();
?>
<form action="index.php" class="d-flex align-items-center flex-column" method="get">
    <?php 
    // echo $form->input('type','text');
    $listeType = $pokemon->selectionType();
    require ('template/listeType2.html.php');
    echo $form->submit();
    ?>
</form>

