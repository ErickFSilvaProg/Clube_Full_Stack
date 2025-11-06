<?php

/**
 * - Operadores de incremento e decremento:
 * 
 *      Subdivisões: pré incremento - O valor é adicionado antes da impressão da variável.
 *                   pós incremento - O valor é adicionado após a impressão da variável.
 * 
 *                   pré decremento - O valor é subtraído antes da impressão da variável.
 *                   pós incremento - O valor é subtraído após a impressão da variável.
 */


$number = 10;


echo "Pré e Pós Incremento:\n";

// pré incremento:
echo "$number -> " . ++$number;
echo "\n";

// pós incremento:
echo $number++ . " -> $number";
echo "\n\n";


echo "Pré e Pós Decremento:\n";

// pré decremento:
echo "$number -> " . --$number;
echo "\n";

// pós decremento:
echo $number-- . " -> $number";
echo"\n\n";