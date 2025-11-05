<?php

// Variáveis:

$name = "Erick";
echo $name;
echo "\n";

$name = "João";
echo $name;
echo "\n\n";


/**
 * - Constantes:
 * 
 *      A declaração do nome das variáveis, por convenção, é com letras maiúsculas.
 *      No momento que uma constante é criada, não podemos altera-la.
 * 
 *      Constantes mágicas do PHP iniciam e terminam com '__' (dois underlines).
 * 
 *      var_dump: Recupera o conteúdo de uma variável.
 */

define('NAME', "Erick");
echo NAME;
echo "\n";

// define('NAME', "João"); - Retorna o erro: Constant NAME already defined

// Constantes pré-definidas:
function teste() {
    // Constantes mágicas:
    echo __FUNCTION__ . "\n";
    echo __METHOD__;
}

teste();
echo "\n";

// Imprime o separador de diretório do sistema:
echo DIRECTORY_SEPARATOR;
echo "\n\n";

// Verificar se uma constante foi definida:
if(defined('NAME')) {
    echo "Foi definido.";
}
else {
    echo "Não foi definida.";
}

// Recupera todas as constantes do PHP:
$constante_php = get_defined_constants(true);
var_dump($constante_php);
echo "\n";