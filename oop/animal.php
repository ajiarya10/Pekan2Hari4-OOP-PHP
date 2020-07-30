<?php
class Animal{
    public $name; 
    public $legs = 2;
    public $cold_blooded;
    public function __construct($name){
        $this->name=$name;
    }
    public function getlegs(){
        echo $this->legs;
    }
    public function get_cold_blooded(){
        echo "false";
    }
}

class Ape extends Animal{
    public $yell = "Auoo";
    public function yell(){
        echo $this->yell;
    }
}

class Frog extends Animal{
    public $jump = "hop hop";
    public function jump(){
        echo $this->jump;
    }
}

$sheep = new Animal("shaun");
echo $sheep->name; // "shaun"
echo "<br>";
echo "<br>" . $sheep->getlegs(); // 2
echo "<br>" . $sheep->get_cold_blooded(); // false
echo "<br>";
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>