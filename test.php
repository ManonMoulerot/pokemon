<?php

require_once('./models/Pokemon.php');
$pokemon = new Pokemon();

$pokemon->setType('feu');
$type =$pokemon->getType(); 
echo $type;
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif('feu', '0.5', '0');
$listeType = $pokemon->selectionType();
$listeParType = $pokemon->selectionPokemonParType('feu');
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif('feu');

require ('template/liste-defensif.html.php');
require ('template/liste-offensif.html.php');
require ('template/listeParType.html.php');
require ('template/listeType.html.php');

$listePokemonDefensif2 = $pokemon->selectionPlusresistDefensif('feu', '2', '2');
require ('template/liste-defensif2.html.php');