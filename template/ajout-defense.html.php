<h3>ajouter les statistiques de défense contre tous les types :</h3>
<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
    while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
        echo "<img src='".$resultrow['img_type']."' id='".$resultrow['id_type']."'/>";
        $idType = $resultrow['id_type'];
        echo $form->input2('defense','text');
        //echo $form->input2($idType,'text');
        // echo $form->inputHidden2($idType,'text');

    }
