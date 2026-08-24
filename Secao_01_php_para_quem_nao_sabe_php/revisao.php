<?php

$lista = [];

$backend = function($linguagem) use ($lista) {

    array_push($lista, $linguagem);
};

$backend('PHP');
print_r($lista);