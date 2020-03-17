<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
?>
<!-- <form action="admin.php" method="GET"> -->
    <?php
    $hidden = $_GET['type2'];
    echo $form->inputHidden('hidden',$hidden);
    $listeType = $pokemon->selectionType();
    require ('template/ajout-attaques.html.php');
    // $listeType = $pokemon->selectionType();
    // require ('template/ajout-defense.html.php');
    //  echo $form->submit();
?>
<!-- </form> -->

