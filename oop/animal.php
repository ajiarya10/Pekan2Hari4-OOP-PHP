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

$sheep = new Animal("shaun");
echo $sheep->name; // "shaun"
echo "<br>";
echo "<br>" . $sheep->getlegs(); // 2
echo "<br>" . $sheep->get_cold_blooded(); // false
echo "<br>";
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>