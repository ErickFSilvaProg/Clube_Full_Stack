<?php

/**
 * - if () {}: Espera valores booleanos dentro do parênteses.
 * 
 * - Ordem de precedência do operadores:
 * 
 *      https://www.php.net/manual/pt_BR/language.operators.precedence.php
 */

$isAdmin = true;
$isOlder = false;
$number1 = 70;
$number2 = 50;
$resultado = $number1 > $number2 && "true" === true;

if ("Erick") {
    echo "Programador";
}

echo "\n";

if ($isAdmin) {
    echo "isAdmin";
}

echo "\n";

if ($resultado) {
    echo "É verdadeiro";
    echo "\n";
    // return;
} else {
    echo "Não é verdadeito";
    echo "\n";
}

echo ($resultado) ? "É verdadeiro" : "Não é verdadeiro";
