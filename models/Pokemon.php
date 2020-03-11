<?php
require_once('pdo.php');

class Pokemon {
    private $pdo;

    public function __construct(){
        $this->pdo = getpdo();
    }
    //sélectionner le 
    public function selectionType($types){
        $sql = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$types."'"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        while ($resultrow2=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>".$resultrow2['nom_pok']."</p>";
        }
    }
    public function selectionPlusresistDefensif($types){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where defensif=0.5"; //instruction/requete sql
        $result1=$this->pdo->query($sql1); //demande a la base de donnée de executer la requete
        while ($resultrow1=$result1->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2 style='background-color:red;'>".$resultrow1['nom_type']."</h2>";
            // $sql2 = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$resultrow1['nom_type']."'"; //instruction/requete sql
            // $result2=$this->pdo->query($sql2); //demande a la base de donnée de executer la requete
            // while ($resultrow2=$result2->fetch(PDO::FETCH_ASSOC)) {
            //     echo "<p style='background-color:red;'>".$resultrow2['nom_pok']."</p>";
            // }
            $this->selectionType($resultrow1['nom_type']);

        }
    }
    public function selectionPlusresistOffensif($types){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where offensif=2"; //instruction/requete sql
        $result1=$this->pdo->query($sql1); //demande a la base de donnée de executer la requete
        while ($resultrow1=$result1->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2 style='background-color:blue;'>".$resultrow1['nom_type']."</h2>";
            $this->selectionType($resultrow1['nom_type']);
        }
    }
}

class TypePokemon { //classe qui ajoute les types et ses résistance et faiblesses
    private $pdo;

    public function __construct(){
        $this->pdo = getpdo();
    }





}