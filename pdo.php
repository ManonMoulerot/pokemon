<?php
function getpdo(){
    try {
    $connect = new PDO('mysql:host=localhost;dbname=db_films;', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    //$dbh = null; 
    //retourne pas de résultat donc on créer des exceptions 
    } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    }
    return $connect;
}

function selectionall($table){
    $connect = getpdo();
    var_dump($connect);
    $sql = "select * FROM ".$table.""; //instruction/requete sql
    $result=$connect->query($sql); //demande a la base de donnée de executer la requete
    while ($resultrow=$result->fetch(PDO::FETCH_ASSOC)) {
        echo "ca marche";
    }
}


    