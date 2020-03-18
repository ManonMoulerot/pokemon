<?php
require_once('pdo.php');

class Pokemon {

    private $pdo;
    private $type;
    
    //function qui appel a chaque fois la connection à pdo
    public function __construct(){
        $this->pdo = getpdo();
    }
    
    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function selectionType(){
        $sql = "select * FROM type"; //instruction/requete sql
        $result=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        return $result;
    }

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les noms sous la formes d'une liste
    public function selectionPokemonParType($types){
        $sql = "select * FROM esttype inner join pokemon on esttype.id_pok = pokemon.id_pok where esttype.type_pok='".$types."'"; //instruction/requete sql
        $result3=$this->pdo->query($sql); //demande a la base de donnée de executer la requete
        return $result3;
    }

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types (dans la fourchette de 2 à 0 possible)qui ont une faible attack contre lui
    public function selectionPlusresistDefensif($type,$resistancemoins,$resistanceplus){
        $sql1 = "select * FROM ".$type." inner join type on ".$type.".id_type_tab=type.id_type where defensif>=$resistanceplus && defensif<=$resistancemoins order by defensif asc"; //instruction/requete sql
         //demande a la base de donnée de executer la requete
         $result2=$this->pdo->query($sql1);
         return $result2;
    }

    //function qui permet de sélectionner un type de pokémon et de ressortir tous les types les plus fort contre lui
    public function selectionPlusresistOffensif($type){
        $sql1 = "select * FROM ".$type." inner join type on ".$type.".id_type_tab=type.id_type where offensif=2"; //instruction/requete sql
        $result1=$this->pdo->query($sql1);
        return $result1;
    }
    // fonction qui ajoute un type de pokemon dans la table Type
    public function ajoutType($type){
        $sqlAjout = "INSERT INTO type(id_type, nom_type, img_type) VALUES ('','".$type."','img/".$type.".png')";
        $result5 = $this->pdo->query($sqlAjout);
        return $result5;
    }
    // fonction qui crée une table avec le type en nom de cette table
    public function creationTableType($type){
        $sqlCreate = "CREATE TABLE ".$type." (`id_type_tab` int(11) NOT NULL,
        `offensif` float NOT NULL,
        `defensif` float NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        $result6 = $this->pdo->query($sqlCreate);
        return $result6;
    }
    // fonction qui crée la relation entre les tables
    public function alterTableType($type){
        $sqlAlterTable = "ALTER TABLE ".$type."
        ADD CONSTRAINT `".$type."_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`); ";
        $result7 = $this->pdo->query($sqlAlterTable);
        return $result7;
    }
       // fonction qui crée la relation entre les tables
       public function ajoutDefAttaqueType($type2,$idType,$attaque,$defense){
        // $tab = array(
        //     'id_type_tab' => $idType,
        //     'offensif'=> $attaque,
        //     'defensif' => $defense );
        // $sqlAjoutDefAttaque = "INSERT INTO '".$type2."'(:id_type_tab, :offensif, :defensif)";
        // $result8 = $this->pdo->prepare($sqlAjoutDefAttaque);
           //  $result8->execute($tab);

        //fonction qui marche
        // $sqlAjoutDefAttaque = "INSERT INTO `".$type2."`(`id_type_tab`, `offensif`, `defensif`) VALUES (".$idType.",".$attaque.",".$defense.")";
        // $result8 = $this->pdo->query($sqlAjoutDefAttaque);
           
        $result8 = $this->pdo->prepare("INSERT INTO `".$type2."`(`id_type_tab`, `offensif`, `defensif`) VALUES (:id_type_tab, :offensif, :defensif)");
   $result8->fetch(PDO::FETCH_ASSOC); 
        $result8->execute(array(
            'id_type_tab' => $idType,
            'offensif'=> $attaque,
            'defensif' => $defense )
        );

// $result8 = $this->pdo->prepare("INSERT INTO `".$type2."`(`id_type_tab`, `offensif`, `defensif`) VALUES (:id_type_tab, :offensif, :defensif)");

//  $result8->execute(array(
//             'id_type_tab' => $idType,
//             'offensif'=> $attaque,
//             'defensif' => $defense )
//         );
// foreach ($result8 AS $key =>$value) {
//     //parcours des lignes
//     echo "{$key} => {$value} ";
//     print_r($result8);
//     }//fin foreach ligne

// foreach($result8 AS $key =>$value){
//    $result8->fetch(PDO::FETCH_ASSOC); 
//         $result8->execute(array(
//             'id_type_tab' => $idType,
//             'offensif'=> $attaque,
//             'defensif' => $defense )
//         );


    return $result8;
    }


}
