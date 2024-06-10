<?php

$array1 = ['Ava', 'Emma', 'Olivia'];
$array2 = ['Olivia', 'Sophia', 'Emma'];

function recebeArrays($array1, $array2) : Array {
  for ($i = 0; $i < count($array2); $i++) {
    array_push($array1, $array2[$i]);
  }
  $uniqueArray = array_unique($array1);  
  return $uniqueArray;
}

print_r(recebeArrays($array1, $array2));