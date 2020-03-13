<?php
    require_once('./models/form.php');
    $form = new Formulaire($_GET);

    if( isset($_GET['type'])){
        $type = $_GET['type'];
       } else { $type = '';
    }
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon(); 
        
    if($type != ''){
        $ajoutType = $pokemon->ajoutType($type);
        $creationTableType = $pokemon->creationTableType($type);
        $alterTableType = $pokemon->alterTableType($type);
        require_once('./models/Pokemon.php');
    } 
    require ('template/ajout-type.html.php');
    require ('template/form-modif.html.php');
    require ('template/form-attaque-defense.html.php')


?>

