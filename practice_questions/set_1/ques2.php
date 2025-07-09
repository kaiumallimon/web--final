<?php

echo "Start1: ";
$start1 = intval(trim(fgets(STDIN)));

echo "Start2: ";
$start2 = intval(trim(fgets(STDIN)));

echo "Term: ";
$term = intval(trim(fgets(STDIN)));

function generateSequence($start1, $start2, $term){
  $sequence = "";
  for($i=0; $i<$term; $i++){
    if($i==0){
      $sequence.="$start1, ";
    }else if($i==1){
      $sequence.="$start2, ";
    }else{
      $result = $start1+$start2+1;
      if($i==$term-1){
        $sequence .="$result";
      }else{
        $sequence .="$result, ";
      }
      $start1=$start2;
      $start2 = $result;
    }
  }

  return $sequence;
}

echo generateSequence($start1,$start2,$term);
?>