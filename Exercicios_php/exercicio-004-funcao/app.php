<?php

/*
    1. Faça um programa que contenha uma função que receba três argumentos inteiros e retorne a soma desses três valores.

    2. Em seguida, o seu script deve fornecer a média dos três números, através de uma segunda função que invoca a primeira (função chamando função).
*/


function somaValores($val1,$val2,$val3)
{

    if (is_numeric($val1) && is_numeric($val2) && is_numeric($val3)) {

        $soma = $val1 + $val2 + $val3;
        return $soma;
    }
}

function mediaValor()
{

    $media = somaValores(10,20,30) / 3;
    return $media;
}

echo mediaValor();
