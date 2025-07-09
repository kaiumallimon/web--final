<?php
## While loop:

// $i = 10;

// while($i>0){
//   echo "Current number:" .$i ."\n";
//   $i--;
// }


// ## Do while loop:

//   $i = 1;

//   do{
//     echo "Current number: $i\n";
//     $i++;
//   }while($i<=10);


## for loop: 
# print only odds
  // for ($i=0; $i <= 10; $i++) { 
  //   if($i%2==0){
  //     continue;
  //   }
  //   echo "Current number: $i\n";
  // }


## for each loop:

  // $colors = array("red", "blue", "green", "yellow");

  // foreach($colors as $color){
  //   echo $color ."\n";
  // }


  $members = array("Peter"=> 35, "Ben"=>67, "Joe"=>34, "Liana"=>28);

  foreach($members as $member=>$age){
    echo "Member: $member, Age: $age\n";
  }
?>