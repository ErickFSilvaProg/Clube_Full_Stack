<?php

/**
 * - Operadores aritméticos:Ordem de precedência.
 * 
 *                 ** (direita)
 *                 ++ (direita)
 *                 -- (direita)
 *      (esquerda) *
 *      (esquerda) /
 *      (esquerda) %
 *      (esquerda) +
 *      (esquerda) -
 */


$number1 = 20;
$number2 = 10;
$operacao = $number1 + $number2 * 5;

// Soma:
echo $number1 + $number2;
echo "\n";

// Subtração:
echo $number1 - $number2;
echo "\n";

// Multiplicação:
echo $number1 * $number2;
echo "\n";

// Divisão:
echo $number1 / $number2;
echo "\n";

// Resto/módulo:
echo $number1 % $number2;
echo "\n\n";

// Operações aritméticas:
echo $operacao;
echo "\n";