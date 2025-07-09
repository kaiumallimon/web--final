<?php
echo "Enter your age: ";
$age = trim(fgets(STDIN));

if($age>=18){
  echo "You're eligible for voting.\n";
}else{
  echo "You're not eligible for voting.\n";
}
?>