<?php

$string = "finnet";

function inverteString($string) : String {
  $stringInvertida = strrev($string);
  return $stringInvertida;
}

echo inverteString($string);