<?php
function getpdo(){
    try {
    $connect = new PDO('mysql:host=localhost;dbname=pokemon;', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    //$dbh = null; 
    //retourne pas de résultat donc on créer des exceptions 
    } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    }
    return $connect;
}

    // public function selectionall($table){
    //     $result = $this->pdo->prepare("select * FROM $table ");
    //     $result->execute();
    //     while ($resultrow=$result->fetch(PDO::FETCH_ASSOC)) {
    //         echo $resultrow['offensif'];
    //     }
    // }
    
    // public function selectionPlusResistant($types){
    //     $sql = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type order by defensif asc"; //instruction/requete sql
    //     $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
    //     while ($resultrow1=$result->fetch(PDO::FETCH_ASSOC)) {
    //         echo $resultrow1['nom_type'];
    //     }
    // }


