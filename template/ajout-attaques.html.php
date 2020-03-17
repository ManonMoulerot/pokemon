<h3>ajouter les statistiques d'attaque contre tous les types :</h3>
<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
    while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
        echo "<img src='".$resultrow['img_type']."'/>";
        echo $form->input('','text');
    }
