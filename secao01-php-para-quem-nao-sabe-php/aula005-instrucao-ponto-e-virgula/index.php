<?php

/**
 *  - Ponto-e-vírgula no PHP
 * 
 *      O PHP precisa que toda instrução deja finalizada com o ponto-e-vírgula.
 *      Se o bloco do PHP for fechado com sua tag de fechamento a últuma instrução não precisa finalisar com o ponto-e-vírgula.
 */

/*
$name = "Erick"
echo $name;

(PHP Parse error:  syntax error, unexpected token "echo")
*/

$first_name = "Erick";
$last_name = "Ferreira";
echo "$first_name $last_name";
echo "\n\n"

?>