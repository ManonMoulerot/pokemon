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
<?php  include("header.php"); ?>
    <section class="container-fluid bg-beige pb-5">
        <div class="container mb-5">
            <h1 class="text-center font-weight-bolder pt-6">Bienvenue sur l'application Poketype</h1>
            <h2 class="text-center mt-4 mb-5">L'appli qui te permet de savoir quel pokémon utiliser contre tes adversaires !</h2>
            <div class="bg-white py-4">
                <?php 
                require_once('./models/form.php');
                $form = new Formulaire($_GET);
                require ('template/form1.html.php');
                if( isset($_GET['type'])){
                    $type = $_GET['type'];
                   } else { $type = '';
                   }
               if($type != ''){
                require_once('./models/Pokemon.php');
                $pokemon = new Pokemon(); 
                $listePokemonDefensif = $pokemon->selectionPlusresistDefensif($type, '2', '2');
                require ('template/liste-defensif-list.html.php');
               }
                ?>

            </div>
            <div class="bg-white mt-5 p-4">
                <?php 
                require_once('./models/form.php');
                $form = new Formulaire($_GET);
                require ('template/form2.html.php');
                
                if( isset($_GET['type2'])){
                    $type = $_GET['type2'];
                    echo "<div class='d-flex justify-content-center font-size1 font-weight-bold mt-4'><img src='img/".$type.".png' alt='".$type."'></div>" ;
                   } else { $type = '';
                   }
               if($type != ''){

                $listePokemonDefensif2_1 = $pokemon->selectionPlusresistDefensif($type, '0.5', '0');
                require ('template/liste-defensif2.1.html.php');
                $listePokemonDefensif_1 = $pokemon->selectionPlusresistDefensif($type, '2', '2');
                require ('template/liste-defensif.1.html.php');
                }
                ?>
            <?php 
            // form
            require_once('./models/form.php');
            $form = new Formulaire($_GET);
            require ('template/form3.html.php');

            if( isset($_GET['type3'])){
                $type = $_GET['type3'];
                } else { $type = '';
                }
            if($type != ''){
            // require 'pdo.php';
            require_once('./models/Pokemon.php');
            $pokemon = new Pokemon(); 
            $listeParType = $pokemon->selectionPokemonParType($type);
            require ('template/listeParType3.html.php');
            echo "<div class='d-flex justify-content-center font-size1 font-weight-bold mt-4'><img src='img/".$type.".png' alt='".$type."'></div>" ;
            }
            ?>
        </div>
    </section>
<?php include("footer.php"); ?>
