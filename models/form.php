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
    public function input2($name,$type) // Une méthode qui popera les inputs
    {
        return "<input type='".$type."' name='".$name."' id='".$name."' value='". $this->getValue($name) ."' required></br>";
    }
    public function inputHidden($name,$type) // Une méthode qui popera les inputs
    {
        return "<input type='hidden' name='".$name."' id='".$name."' value='". $_GET['type2'] ."'></br>";
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
}  

