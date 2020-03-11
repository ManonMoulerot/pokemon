<?php 
require 'form.php';
require 'pdo.php';
require 'models/Pokemon.php';
$form = new Formulaire($_POST);
$pokemon = new Pokemon();
echo $pokemon->selectionType('acier');
echo $pokemon->selectionPlusresistDefensif('acier');
echo $pokemon->selectionPlusresistOffensif('acier');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?php 
    echo $form->input('type','text');
    echo $form->submit();
    ?>
    </form>
</body>
</html>