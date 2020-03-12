<?php 
// require 'form.php';
// require 'pdo.php';
// require 'models/Pokemon.php';
// $form = new Formulaire($_POST);
// $pokemon = new Pokemon();
// echo $pokemon->selectionType();
// $pokemon->SetType('acier');
// echo $pokemon->selectionPlusresistDefensif('spectre','0.5','0','pokemondef');
// echo "<h1>lol</h1>";
// echo $pokemon->selectionPlusresistDefensif('spectre','2','2','pokemondef');
// echo "<h1>lol</h1>";
// echo $pokemon->selectionPlusresistOffensif('spectre');
// echo "<h1>lol</h1>";
// echo $pokemon->selectionPlusresistDefensif('spectre','2','2','pokemondef');
// echo $pokemon->selectionPokemonParType('feu');


?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?php 
    // echo $form->input('type','date');
    // echo $form->submit();
    ?>
    </form>
</body>
</html> -->

<?php

require_once('./models/Pokemon.php');
$pokemon = new Pokemon();
$listePokemonDefensif = $pokemon->selectionPlusresistDefensif('eau', '0', '0.5');
$listeType = $pokemon->selectionType();
$listeParType = $pokemon->selectionPokemonParType('feu');
$listePokemonOffensif = $pokemon->selectionPlusresistOffensif('feu');
require ('template/liste-defensif.html.php');
require ('template/liste-offensif.html.php');
require ('template/listeParType.html.php');
require ('template/listeType.html.php');