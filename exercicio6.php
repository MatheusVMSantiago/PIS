<?php
function anoBissexto($ano) {
if ( ($ano%4==0 && $ano%100!=0) || $ano%400 == 0) {
   echo "$ano é bissexto";
  return true;
  } else {
    echo "$ano não é bissexto";
    return false;
  }
}
var_dump(anoBissexto(2040));
