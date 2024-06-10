<?php

function gerarNomes() {
    $letras = chr(rand(65, 90)) . chr(rand(65, 90));    
    $numeros = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
    return $letras . $numeros;
}

function gravarRobo($qtdRobos) {
    $nomes = [];
    while (count($nomes) < $qtdRobos) {
        $nome = gerarNomes();

        if (!in_array($nome, $nomes)) {
            $nomes[] = $nome;
        }
    }
    
    return $nomes;
}

$qtdRobos = 10;
print_r(gravarRobo($qtdRobos));
