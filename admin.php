<?php
    require_once('./models/form.php');
    $form = new Formulaire($_GET);

    if( isset($_GET['type'])){
        $type = $_GET['type'];
       } else { $type = '';
    }
    require_once('./models/Pokemon.php');
    $pokemon = new Pokemon(); 
    //s'il existe un nouveau type de pokémon alors ajouter le à la table "type" et créer une nouvelle table avec son nom, créer ensuite les liaisons
    if($type != ''){
        $ajoutType = $pokemon->ajoutType($type);
        $creationTableType = $pokemon->creationTableType($type);
        $alterTableType = $pokemon->alterTableType($type);
        require_once('./models/Pokemon.php');
    } 
    require ('template/ajout-type.html.php');
    //si on a sélectionner un type de pokémon à modifier, alors les inputs s'affichent
    require ('template/form-modif.html.php');
    if( isset($_GET['type2'])){
        $type = $_GET['type2'];
        require ('template/form-attaque-defense.html.php');
        if(isset($_GET['hidden'])){
            $ajoutDefAttaque = $pokemon->ajoutDefAttaqueType($type);
        }
       } else { 
           $type = '';
    }


?>

