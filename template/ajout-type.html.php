<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
?>
<h2 class="d-flex justify-content-center mt-4">Ajouter un type de pokémon :</h2>
<form action="admin.php" method="get" class="mt-4 d-flex flex-column align-items-center">
    <?php 
    echo $form->input('type','text');
    echo $form->submit();
    ?>
</form>