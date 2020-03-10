<?php 
require 'form.php';
require 'pdo.php';
$form = new Formulaire($_POST);

selectionall();
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
    echo $form->input('name','text');
    echo $form->input('date','date');
    echo $form->submit();

    ?>
    </form>
</body>
</html>