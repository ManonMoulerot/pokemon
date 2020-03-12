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
        return $result;
    }



    //function qui permet de sélectionner un type de pokémon et de ressortir tous les noms sous la formes d'une liste
    public function selectionPokemonParType($types){
        $sql = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$types."'"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
       return $result;
    
       //var_dump($result);
       
    
      
    }


    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types (dans la fourchette de 2 à 0 possible)qui ont une faible attack contre lui
    public function selectionPlusresistDefensif($types,$resistancemoins,$resistanceplus){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where defensif>=$resistanceplus && defensif<=$resistancemoins order by defensif asc"; //instruction/requete sql
         //demande a la base de donnée de executer la requete
         $result1=$this->pdo->query($sql1);
         return $result1;
    }

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types les plus fort contre lui
    public function selectionPlusresistOffensif($types){
        $sql1 = "select * FROM ".$types." inner join type on ".$types.".id_type_tab=type.id_type where offensif=2"; //instruction/requete sql
        $result1=$this->pdo->query($sql1);
        return $result1;
    }
    
}