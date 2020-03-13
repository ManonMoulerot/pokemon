<?php
    require_once('./models/form.php');
    $form = new Formulaire($_GET);
    require ('template/ajout-type.html.php');
    if( isset($_GET['type'])){
        $type = $_GET['type'];
       } else { $type = '';
    }
    if($type != ''){
        require_once('./models/Pokemon.php');
        $pokemon = new Pokemon(); 
        $ajoutType = $pokemon->ajoutType($type);
        $creationTableType = $pokemon->creationTableType($type);
        $alterTableType = $pokemon->alterTableType($type);
    }
    $form->inputFichier('admin.php');
    if( isset($_POST['dossier'])){
        $dossier = $_POST['dossier'];
       } else { $dossier = '';
    }
    if($dossier != ''){
        $test = $form->fichier('../pokemon-chloe/image/',$_FILES['file']['name'],'feu');
    }
?>

