<?php

function verificaNumeroPrimo($numero) {
  if ($numero <= 1) {
    return false;
  } else if ($numero == 2) {
    return false;
  } else if ($numero % 2 == 0) {
    return false;
  }
  for ($i = 3; $i <= sqrt($numero); $i += 2) {
    if ($numero % $i == 0) {
        return false;
    }
}
return true;
}

var_dump(verificaNumeroPrimo(11));