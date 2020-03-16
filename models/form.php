<?php
class Formulaire
{
        /*@ $data:tableau*/
    private $data; 
    private $type;//pour enregistrer les données dans un tableau
    public function setType($type){
        $this->type = $type;
    }

    // public function getType(){
    //     return $this->type;
    // }

    public function __construct($data = array()){
        $this->data = $data;
        // var_dump($data);
        
    }
  
    private function getValue($index){
        // if(isset($this->data[$index])){
        //     return $this->data[$index];
        // }else{
        //     return $this->data[$index] = 'null';
        // }
        return isset($this->data[$index]) ? $this->data[$index] :null; //ternaire pour recuperer les valeurs

       
    }

    public function input($name,$type) // Une méthode qui popera les inputs
    {
        return "<label for='".$name."'>".$name." : </label><input type='".$type."' name='".$name."' id='".$name."' value='". $this->getValue($name) ."'></br>";
    }

    // public function getTypeForm($type){
    //     isset($this->$_GET['type']) ? $_GET['type'] = $type : $type=null;
    //     // var_dump($type)
    //     $this->type = $type;
    //     // return $type;
    // }
    
    public function submit() // Une méthode qui un submit
    {
       return '<input type="submit" value="envoyer">';
    }


    public function inputFichier() // Une méthode qui pop un input file et son bouton
    {
        echo '<input type="hidden" name="dossier" value="image"/>';
        echo '  <input type="file" name="file" id="file" />';
        echo '  <input class="button" type="submit" />';
    }    

    public function fichier($repertoireDestination,$nomFichier,$nouveauNom) //qui envoi le fichier dans le chemin données avec son nouveau nom
    {

                $nomFichier=$_FILES['file']['name'];
                $nomDestination = $nouveauNom.".png";
                $nomOrigine = $_FILES['file']['name'];
                $elementsChemin = pathinfo($nomOrigine);
                $extensionFichier = $elementsChemin['extension'];
                $extensionsAutorisees = array("png");
                if (!(in_array($extensionFichier, $extensionsAutorisees))) {
                    echo "Le fichier n'a pas l'extension attendue";
                } else {
    
                if (move_uploaded_file($_FILES["file"]["tmp_name"], 
                                                $repertoireDestination.$nomDestination)) {
                    echo "Le fichier temporaire ".$_FILES["file"]["tmp_name"].
                            " a été déplacé vers ".$repertoireDestination.$nomDestination;
                } else {
                    echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                            "Le déplacement du fichier temporaire a échoué".
                            " vérifiez l'existence du répertoire ".$repertoireDestination;
                }

    }

}  
}  

