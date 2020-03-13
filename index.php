<?php 
// form
require_once('./models/form.php');
$form = new Formulaire($_GET);
require ('template/form.html.php');

if( isset($_GET['type'])){
     $type = $_GET['type'];
    } else { $type = '';
    }
if($type != ''){
// require 'pdo.php';
require_once('./models/Pokemon.php');
$pokemon = new Pokemon(); 
$listeParType = $pokemon->selectionPokemonParType($type);
require ('template/listeParType.html.php');
$listePokemonDefensif2 = $pokemon->selectionPlusresistDefensif($type, '0.5', '0');
require ('template/liste-defensif2.html.php');
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif($type, '2', '2');
require ('template/liste-defensif.html.php');
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif($type);
require ('template/liste-offensif.html.php');
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>