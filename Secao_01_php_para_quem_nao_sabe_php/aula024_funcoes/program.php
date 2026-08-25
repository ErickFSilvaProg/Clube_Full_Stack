<?php

$lista = [];
$mensagem = 'Item adicionado!';

function adicionarCarros($lista, $novoCarro) {
    array_push($lista, $novoCarro);
    return $lista;
}

$lista = adicionarCarros($lista, 'Gol');
$lista = adicionarCarros($lista, 'Onix');
$lista = adicionarCarros($lista, 'Mobi');

echo $mensagem . "\n";

foreach ($lista as $carro) {
    echo $carro . "\n";
}

echo "\n";