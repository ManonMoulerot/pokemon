<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <style>
        .bg-beige {
            background-color: #FFFFAA;
        }

        .custom-select {
             width: 15%;
        }

        .w60 .custom-select {
            width: 60%;
        }
        .w25{
            width:25%!important;
        }
    </style>

    
</head>

<body>
<?php include 'header.php'; ?>
    <section class="container-fluid bg-beige pb-5">
        <div class="container mb-5">
            <h1 class="text-center font-weight-bolder pt-6">Bienvenue sur l'application Poketype</h1>
            <h2 class="text-center mt-4 mb-5">L'appli qui te permet de savoir quel pokémon utiliser contre tes adversaires !</h2>
            <div class="bg-white py-4">
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
                    echo '<form enctype="multipart/form-data" action="admin.php" method="post" class="d-flex align-items-center flex-column">';
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
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
