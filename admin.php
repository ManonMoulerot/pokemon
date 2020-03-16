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

    require ('template/form-modif.html.php');
    require ('template/form-attaque-defense.html.php')

?>

