<?php 
// form
require_once('./models/form.php');
$form = new Formulaire($_GET);
require ('template/form.html.php');
require 'pdo.php';
require_once('./models/Pokemon.php');

$pokemon = new Pokemon();
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif('feu', '2', '2');
require ('template/liste-defensif.html.php');
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif('feu', '0.5', '0');
require ('template/liste-defensif.html.php');
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif('feu');
$listeParType = $pokemon->selectionPokemonParType('feu');
$listeType = $pokemon->selectionType('feu');
require ('template/liste-offensif.html.php');
require ('template/listeParType.html.php');
require ('template/listeType.html.php');





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