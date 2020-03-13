<?php
    require_once('./models/Pokemon.php');

    $pokemon = new Pokemon();
?>
<form action="admin.php" method="get">
    <?php 
    echo $form->input('type','text');
    echo $form->submit();
    ?>
</form>