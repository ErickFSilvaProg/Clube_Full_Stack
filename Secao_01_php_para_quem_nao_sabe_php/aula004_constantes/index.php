<?php

// CONSTANTES

define('NAME','Alexandre');
echo NAME;
echo "\n";


// Constantes pré-definidas:
function teste() {
    // Constantes mágicas, recupera o nome da função.
    echo __FUNCTION__;
    echo "\n";
    echo __METHOD__;
}

teste();
echo "\n";

echo DIRECTORY_SEPARATOR; // Imprime uma barra "\".
echo "\n";


// Verifica se uma constante foi definida:
if (defined('NAME')) {
    echo "Constante definida.";
}
else {
    echo "Constante não definida.";
}
echo "\n";


// Imprime todas as constantes do PHP:
$cons = get_defined_constants(true);
var_dump($cons);
echo "\n";