<?php
$x = 5; // int
$y = "John"; // string
$z = 4.6; // float
$p = true; // bool
$f = array(1,2,3); // array

// object
class Person{
  public $name;

  public function message(){
    echo("Available person: $this->name");
  }
}
$g = new Person();
$g->name = "Alice";
$g->message();

// null
$i = null


?>