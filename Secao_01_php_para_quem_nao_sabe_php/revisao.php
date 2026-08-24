<?php

$lista = [];
$backend = function($linguagem) use (&$lista) {

    array_push($lista, $linguagem);
};


$backend('PHP');
$backend('Javascript');
$backend('HTML5');
$backend('CSS3');


foreach ($lista as $listaBackend) {
    echo "{$listaBackend}\n";
}