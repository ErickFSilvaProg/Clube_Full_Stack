<?php

/**
 * - Falsy: São valores que se comportam como valores booleanos falsos, mas não são valores booleanos.
 * 
 *      null    -> null
 *      0       -> integer
 *      0.0     -> float
 *      "0"     -> string
 *      ""      -> empty string
 *      array() -> empty array
 * 
 * 
 * - Truthy: Todo o resto.
 */


// Falsy:
var_dump(!!null);
var_dump(!!0);
var_dump(!!0.0);
var_dump(!!"0");
var_dump(!!"");
var_dump(!!array());


// Truthy:
if (!0) {
    echo "teste";
    echo "\n";
}

if (!!"Erick") {
    echo "Programador";
}