<?php

$a = 2;
$b = 3;
$c = -5;

function calculaBaskara($a, $b, $c) {
  $resultado = [];

  $delta = (pow($b, 2) + ((-4 * $a) * $c));
 
  if ($delta != 0) {
    $px = ((-($b)) + sqrt($delta)) / (2 * $a);
    array_push($resultado, $px);

    $sx = ((-($b)) - sqrt($delta)) / (2 * $a);
    array_push($resultado, $sx);
  } else {
    $px = ((-($b)) / (2 * $a));
    array_push($resultado, $px);
    array_push($resultado, $px);
  }
  return $resultado;
}

print_r(calculaBaskara($a, $b, $c));
