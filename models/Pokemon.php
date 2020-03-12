<?php
require_once('pdo.php');

class Pokemon {

    private $pdo;
    //function qui appel a chaque fois la connection à pdo
    public function __construct(){
        $this->pdo = getpdo();
    }

    public function selectionType(){
        $sql = "select * FROM type"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        echo "<select name='type'>";
        echo "<option disabled selected>Liste type</option>";
        while ($resultrow=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value=".$resultrow['id_type'].">".$resultrow['nom_type']."</option>";
        }
        echo "</select>";
    }



    //function qui permet de sélectionner un type de pokémon et de ressortir tous les noms sous la formes d'une liste
    public function selectionPokemonParType($types){
        $sql = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$types."'"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        echo "<select name='".$types."'>";
        echo "<option disabled selected>Liste pokémon</option>";
        while ($resultrow2=$result->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value=".$resultrow2['nom_pok'].">".$resultrow2['nom_pok']."</option>";
        }
        echo "</select>";
    }


    //creer un while avec comme variable la requete
    public function whileType($sql1){
        $result1=$this->pdo->query($sql1);
        while ($resultrow1=$result1->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>".$resultrow1['nom_type']."</h2>"; 
            $this->selectionPokemonParType($resultrow1['nom_type']);     //rappel de la function selection type pour ressortir les pokemon par type

        }}

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types (dans la fourchette de 2 à 0 possible)qui ont une faible attack contre lui
    public function selectionPlusresistDefensif($types,$resistancemoins,$resistanceplus){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where defensif>=$resistanceplus && defensif<=$resistancemoins order by defensif asc"; //instruction/requete sql
         //demande a la base de donnée de executer la requete
        $this->whileType($sql1);   //rappel de la function while qui rappel la function selection type pour ressortir les pokemon par type
    }

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types les plus fort contre lui
    public function selectionPlusresistOffensif($types){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where offensif=2"; //instruction/requete sql
        $this->whileType($sql1);  //rappel de la function while qui rappel la function selection type pour ressortir les pokemon par type
    }
    
}