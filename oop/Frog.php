<?php
class Frog{
    public $name;
    public $jump = "hop hop";
    public function __construct($name){
        $this->name=$name;
    }
    public function jump(){
        echo $this->jump;
    }
}
$kodok = new Frog("buduk");
echo $kodok->name;
echo "<br>";
$kodok->jump() ; // "hop hop"
echo "<br>";
?>