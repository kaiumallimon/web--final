<?php

# prints a message
function greet(){
  echo "Hello world";
}

## add two values and return the result 
function add($a, $b){
  return $a+$b;
}

# pass by reference
function add_five(&$value){
  $value+=5;
}

# multiple unknown arguments
function myFamily($firstname, ...$lastname){
  $txt = "";
  $len = count($lastname);
  for($i = 0; $i<$len; $i++){
    $txt .= "Hi $firstname, $lastname[$i]\n";
  }

  return $txt;
}




// greet();

// echo add(4,5);
// $number = 5;
// add_five($number);

// echo($number);
echo myFamily("John", "Smith", "Doe", "Taylor");

?>