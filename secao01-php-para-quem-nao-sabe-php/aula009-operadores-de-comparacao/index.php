<?php

/**
 * - Operadores de comparação:
 * 
 *      Compara valores e seu resultado sempre será um booleano (true ou false).
 *          
 *          Sendo true retornará o valor 1.
 *          Sendo false não retorna nada.
 *      
 *      Operadores: < - Menor que
 *                  > - Maior que
 *                  <= - Menor ou igual
 *                  >= - Maior que ou igual
 *                  != ou !== - Diferente: Verifica se o valor é diferente ou o tipo é diferente
 *                  == ou === - Igual: Verifica se o valor é igual ou o tipo é igual
 */


// Menor que:
var_dump(30 < 50);
echo "\n";

// Maior que:
var_dump(30 > 50);
echo "\n";

// Menor ou igual:
var_dump(30 <= 50);
echo "\n";

// Maior ou igual:
var_dump(30 >= 50);
echo "\n";

// Diferente:
var_dump("50" != 50);
echo "\n";
var_dump("50" !== 50);
echo "\n";

// Igual:
var_dump("50" == 50);
echo "\n";
var_dump("50" === 50);
echo "\n";