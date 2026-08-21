<?php

// O "switch" verifica o valor da variável:

$name = 'Carlos';

switch ($name) {
    case 'Alexandre':
        echo "Olá, Alexandre";
        break;
    case 'Erick':
        echo "Olá, Erick";
        break;
    default:
        echo "Quem é você?";
        break;
}