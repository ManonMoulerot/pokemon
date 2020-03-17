<h3>ajouter les statistiques d'attaque contre tous les types :</h3>
<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
    while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
        echo "<img src='".$resultrow['img_type']."' id='".$resultrow['id_type']."'/>";
        $type2 = $resultrow['id_type'];
        echo $type2;
        echo $form->inputHidden2($type2);
        echo $form->input2('attaque','text');
        echo $form->input2('defense','text');
        // echo $form->input2($idType,'text');

    }
