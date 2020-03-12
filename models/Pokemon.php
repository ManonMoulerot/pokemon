<?php
require_once('pdo.php');

class Pokemon {
    private $pdo;
    
    public function __construct(){
        $this->pdo = getpdo();
    }
    
    public function selectionType($types){
        $sql = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$types."'"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        echo "<select name='test' id='liste-pokemon'>";
        echo "<option disabled selected>Liste pokémon</option>";
        while ($resultrow2=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value=".$resultrow2['nom_pok'].">".$resultrow2['nom_pok']."</option>";
        }
        echo "</select>";
    }


    public function selectionPlusresistDefensif($types,$resistancemoins,$resistanceplus){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where defensif>=$resistanceplus && defensif<=$resistancemoins order by defensif asc"; //instruction/requete sql
        $result1=$this->pdo->query($sql1); //demande a la base de donnée de executer la requete

        while ($resultrow1=$result1->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>".$resultrow1['nom_type']."</h2>";
            $this->selectionType($resultrow1['nom_type']);
        }

    }
    
}
}