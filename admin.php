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

    //enregistrement d'image suivant le type selectionner avec un formulaire
    echo '<form enctype="multipart/form-data" action="admin.php" method="post">';
    //donction qui affiche tout les types avec un select
    $listeType = $pokemon->selectionType();
    require ('template/listeType.html.php');
    //fonction qui affiche un input type file
        $form->inputFichier();
    echo '</form>';
    //Si j'envoie le formulaire je récupere sa valeur dans une variable
    if( isset($_POST['dossier'])){
        $dossier = $_POST['dossier'];
    } else { $dossier = '';
    }
    //J'execute la function qui enregistre l'image
    if($dossier != ''){
        $test = $form->fichier('../pokemon/img/',$_FILES['file']['name'],$_POST['type']);
    }

    //si on a sélectionner un type de pokémon à modifier, alors les inputs s'affichent
    require ('template/form-modif.html.php');
    if( isset($_GET['type2'])){
        $type = $_GET['type2'];
        require ('template/form-attaque-defense.html.php');
        // $ajoutDefAttaque = $pokemon->ajoutDefAttaqueType($type);
       } else { 
           $type = '';

     }
     if(isset($_GET['hidden'])){
        $type2 = $_GET['hidden'];
        $idType = $_GET['id_type'];
        $attaque = $_GET['attaque'];
        $defense = $_GET['defense'];
        $ajoutDefAttaque = $pokemon->ajoutDefAttaqueType($type2,$idType,$attaque,$defense);
        // require ('template/form-attaque-defense.html.php');
        require_once('./models/Pokemon.php');
        }else { 
            $type2 = '';
            $idType= '';
            $attaque='';
            $defense='';
  }

?>