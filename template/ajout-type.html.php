<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
?>
<h1>Ajouter un type de pokémon :</h1>
<form action="admin.php" method="get">
    <?php 
    echo $form->input('type','text');
    echo $form->submit();
    ?>
</form>