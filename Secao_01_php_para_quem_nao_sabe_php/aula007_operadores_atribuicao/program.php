<?php

/* 
    — Operadores de atribuição:

        =    → Define o valor da esquerda com o valor da direita.
        +=   → Soma o valor da direita ao valor atual da variável.
        -=   → Subtrai o valor da direita da variável.
        *=   → Multiplica a variável pelo valor da direita.
        /=   → Divide a variável pelo valor da direita.
        %=   → Pega o resto da divisão da variável pelo valor da direita.
        **=  → Eleva a variável à potência do valor da direita.
        .=   → Junta (concatena) um texto novo ao texto que já estava na variável.
        ??=  → Atribui um valor padrão caso a variável da esquerda seja nula.
        =&   → Faz uma atribuição por referência, ligando duas variáveis ao mesmo espaço de memória.

*/


// Variáveis:
$var10 = 10;
$var0 = 0;
$texto = "O rato roeu";
$varNull = null;


// 
echo $var0 = $var10;
echo "\n";

echo $var0 += $var10;
echo "\n";

echo $var0 -= $var10;
echo "\n";

echo $var0 *= $var10;
echo "\n";

echo $var0 /= $var10;
echo "\n";

echo $var0 %= $var10;
echo "\n";

echo $var0 **= $var10;
echo "\n";

echo $texto .= " a roupa do rei de Roma.";
echo "\n";

echo $varNull ??= $var10;
echo "\n";
