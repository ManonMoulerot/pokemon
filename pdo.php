<?php
function getpdo(){
    try {
    $connect = new PDO('mysql:host=localhost;dbname=manonm_pokemon;', 'manonm', 'kFDlwZ1CoC30jg==',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
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

                // $sql2 = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$resultrow1['nom_type']."'"; //instruction/requete sql
            // $result2=$this->pdo->query($sql2); //demande a la base de donnée de executer la requete
            // while ($resultrow2=$result2->fetch(PDO::FETCH_ASSOC)) {
            //     echo "<p>".$resultrow2['nom_pok']."</p>";
            // }


