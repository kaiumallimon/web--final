<?php 
$cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);


array_push($cars, "Rolls Royce");
array_push($cars, "Mercedes");
array_push($cars, "Lamborghini");

# print array
var_dump($cars);


# remove items from array (1,2,3)
array_splice($cars, 1,3);

var_dump($cars);


# sort an array: [ascending alphabetical]
sort($cars);
var_dump($cars);


# reverse sort [descending alphabetical]
rsort($cars);
var_dump($cars);
?>