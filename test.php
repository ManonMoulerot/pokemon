<?php

require_once('./models/Pokemon.php');

$pokemon = new Pokemon();
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif('spectre', '2', '2');
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif('spectre');
$listeParType = $pokemon->selectionPokemonParType('spectre');
$listeType = $pokemon->selectionType();
//var_dump($listePokemon);

require ('template/liste-defensif.html.php');
require ('template/liste-offensif.html.php');
require ('template/listeParType.html.php');
require ('template/listeType.html.php');