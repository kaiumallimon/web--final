<?php 
echo "Enter your age: ";
$age = trim(fgets(STDIN));

switch($age){
  case 18:
    echo "You're just an adult.\n";
    break;
  case 21:
    echo "You're allowed to drink in the US.\n";
    break;
  case 65:
    echo "You may be eligible for retirement.\n";
    break;
  default:
    echo "Age entered: $age\n";
    break;
}
?>
