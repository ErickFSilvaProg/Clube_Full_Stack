<?php

/**
 * - Operadores de atribuição:
 * 
 *      = - Operador de atribuição.
 * 
 * 
 * - Operadores de atribuição composta:
 * 
 *      *= - Multiplicaçao e atribuição.
 *      /= - Divisão e atribuição.
 *      %= - Módulo e atribuição.
 *      += - Adição e atribuição.
 *      -= - Subtração e atribuição.
 *      
 *      
 * - Operador de atribuição e concatenação:
 * 
 *      .= - Operador de concatenação.
 */


$name = "Erick";
$name = $name . " Ferreira";
echo $name;
echo "\n";

$name2 = "Pedro";
$name2 .= " Melo";
echo $name2;
echo "\n";

$number = 10;
$number += 20;
echo $number;