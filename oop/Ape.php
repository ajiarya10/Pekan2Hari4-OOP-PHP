<?php
class Ape{
    public $name;
    public $yell = "Auoo";
    public function __construct($name){
        $this->name=$name;
    }
    public function yell(){
        echo $this->yell;
    }
}

$sungokong = new Ape("kera sakti");
echo $sungokong->name;
echo "<br>";
echo "<br>".$sungokong->yell();
echo "<br>"; // "Auooo"
?>