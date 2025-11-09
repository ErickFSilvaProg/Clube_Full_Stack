<?php

/**
 * - Operadores lógicos:
 * 
 *      Os operadores lógicos, assim como os de comparação, sempre retornam um booleano (true ou false).
 *      Diferentemente dos operadores de conparação, eles precisam de valores booleanos para poder retornar true ou false.
 * 
 *          && (and): E lógico.
 *          || (or): OU lógico.
 *          ! (not): NÃO lógico.
 * 
 * - Ordem de precedência do operadores:
 * 
 *      https://www.php.net/manual/pt_BR/language.operators.precedence.php
 */


$canAccess = true;
$isOlder = false;
$name = "Erick Ferreira";


// - && (and):
var_dump($canAccess && $isOlder);


// - || (or):
var_dump($canAccess || $isOlder);


// - ! (not):
var_dump(!$canAccess);

// Ao utilisar dois sinais de negação (!!), na mesma variável, o valor inicial será retornado.
var_dump(!!$canAccess);

var_dump(!$name); // Transforma a string em um boolean false.
var_dump(!!$name); // Transforma a string em um boolean true.