<?php

// O "switch" verifica o valor da variável:

$saldacao = 'Olá';
$name = 'Erick';
$desconhecido = 'Quem é você?';

switch ($name) {
    case 'Alexandre':
        echo "{$saldacao}, {$name}";
        break;

    case 'Erick':
        echo $saldacao . ', ' . $name;
        break;

    default:
        echo $desconhecido;
        break;
}
