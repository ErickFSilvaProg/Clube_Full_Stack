<?php

/**
 * - switch ($variavel) {
 *      case $variavel:
 *          código aqui;
 *          break;
 *      
 *      default:
 *          código aqui;
 *          break;
 *   }
 * 
 * - Ordem de precedência do operadores:
 * 
 *      https://www.php.net/manual/pt_BR/language.operators.precedence.php
 */


$name = "Pedro";

switch ($name) {
    case "Erick":
        echo "É Erick";
        break;

    case "Maria":
        echo "É Maria";
        break;

    case "João":
        echo "É João";
        break;

    default:
        echo "Não é nenhum";
        break;
}
