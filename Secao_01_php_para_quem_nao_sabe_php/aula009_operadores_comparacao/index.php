<?php

/*
    — Operadores de comparação:

        Os operadores de comparação em PHP servem para comparar dois valores e retornar um resultado verdadeiro (true) ou falso (false), incluindo os principais como == (igual), === (idêntico) e <=> (nave espacial).

        $a == $b (Igual): Retorna true se os valores forem iguais após converter os tipos.
        $a === $b (Idêntico): Retorna true se os valores forem iguais e do mesmo tipo de dado.
        $a != ou <> $b (Diferente): Retorna true se os valores não forem iguais.
        $a !== $b (Não idêntico): Retorna true se os valores forem diferentes ou de tipos diferentes.
        $a < $b (Menor que): Retorna true se $a for menor que $b.
        $a > $b (Maior que): Retorna true se $a for maior que $b.
        $a <= $b (Menor ou igual): Retorna true se $a for menor ou igual a $b.
        $a >= $b (Maior ou igual): Retorna true se $a for maior ou igual a $b.
        $a <=> $b (Nave espacial / Spaceship): Retorna -1, 0 ou 1 se $a for menor, igual ou maior que $b.

*/


// Variáveis:
$a = 10;
$b = 20;
$texto = "Lorem ipsum";


// 
var_dump($a);
echo "\n";

var_dump($texto);
echo "\n";
echo "\n";

var_dump($a == $b);
echo "\n";

var_dump($a === $b);
echo "\n";

var_dump($a != $b);
echo "\n";

var_dump($a !== $b);
echo "\n";

var_dump($a < $b);
echo "\n";

var_dump($a > $b);
echo "\n";

var_dump($a <= $b);
echo "\n";

var_dump($a >= $b);
echo "\n";

var_dump($a <=> $b);
echo "\n";