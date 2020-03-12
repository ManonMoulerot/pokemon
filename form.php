<?php
class Formulaire
{
        /*@ $data:tableau*/
    private $data; //pour enregistrer les données dans un tableau
    public function __construct($data = array()){
        $this->data = $data;
        var_dump($data);
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

    public function select($name,$type) // Une méthode qui popera les inputs
    {
        return "<label for='".$name."'>".$name." : </label><input type='".$type."' name='".$name."' id='".$name."' value='". $this->getValue($name) ."'></br>";
    }
    
    public function submit() // Une méthode qui un submit
    {
       return '<input type="submit" value="envoyer">';
    }    
}  

