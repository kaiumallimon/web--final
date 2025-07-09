<?php 
echo "Seed Value: ";
$seed = intval(trim(fgets(STDIN)));

echo "Terms: ";
$terms = intval(trim(fgets(STDIN)));


function getDigitSum($number){
  $result = 0;
  
  while($number!=0){
    $last_digit = $number%10;
    $result+=$last_digit;
    $number= (int) $number/10;
  }

  return $result;
}

function displaySequence($seed, $terms){
  $first_value = $seed;
  $second_value = $seed;

  $sequence = "$seed, ";

  for($i = 1; $i<$terms; $i++){
    $result = $first_value + $second_value;
    $first_value = $result;
    $second_value = getDigitSum($result);
    if($i==$terms-1){
      $sequence .= "$result";
    }else{
      $sequence .= "$result, ";
    }
  }

  return $sequence;
}

echo displaySequence($seed, $terms);
?>