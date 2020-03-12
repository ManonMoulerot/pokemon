<?php 
require 'form.php';
require 'pdo.php';
require_once('./models/Pokemon.php');
$pokemon = new Pokemon();

$pokemon->setType('glace');
$type =$pokemon->getType(); 
echo $type;
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif($type, '0.5', '0');
$listeType = $pokemon->selectionType();
$listeParType = $pokemon->selectionPokemonParType($type);
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif($type);

require ('template/liste-defensif.html.php');
require ('template/liste-offensif.html.php');
require ('template/listeParType.html.php');
require ('template/listeType.html.php');

$pokemon->setType('glace');
$type =$pokemon->getType(); 

$listePokemonDefensif2 = $pokemon->selectionPlusresistDefensif($type, '2', '2');
require ('template/liste-defensif2.html.php');