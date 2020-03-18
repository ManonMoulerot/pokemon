<h2 class="d-flex justify-content-center py-4 text-align-center">ajouter les statistiques contre tous les types :</h2>
<p class="justify-content-center font-family-roboto text-align-center mb-4" id="paragraphe-atq-def1">(A gauche la statistique d'attaque et à droite la statistique de défense.)</p>
<p class="justify-content-center font-family-roboto text-align-center mb-4 font-size1" id="paragraphe-atq-def2">(En haut la statistique d'attaque et en bas la statistique de défense.)</p>
<div class="d-flex justify-content-center flex-wrap">
<?php
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon();
    while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
        echo "<form action='admin.php' method='GET' class='row margin-0 justify-content-center' id='formulaire-atq-def'>";
        echo "<img src='".$resultrow['img_type']."' id='".$resultrow['id_type']."'/>";
        $type2 = $resultrow['id_type'];
        // echo $type2;
        $hidden = $_GET['type2'];
    echo $form->inputHidden('hidden',$hidden);
       echo $form->inputHidden2($type2);
        echo $form->input2('attaque','text');
        echo $form->input2('defense','text');
        // echo $form->input2($idType,'text');
        echo $form->submit();
        echo "</form></br>";

    }
    ?>
    </div>
