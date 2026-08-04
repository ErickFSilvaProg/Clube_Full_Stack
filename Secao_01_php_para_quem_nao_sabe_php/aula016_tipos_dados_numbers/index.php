<?php

/*
    — Existem dosi tipod de valores numéricos no PHP:

        → Valores inteiros: 
            ↪ integer: 34, 45

        → Valores não inteiros:
            ↪ double: 3.4, 5.6
        

    — Funções numéricas: Funções de Math.
    https://www.php.net/manual/pt_BR/ref.math.php

        ceil() - Arredonda um número para cima.
        floor() - Arredonda um número para baixo.

*/


echo gettype(34);
echo "\n";

echo gettype(34.45);
echo "\n";


// — Integer:
// O PHP somará se reconhecer um número como string.
// Se tiver cadeia de caracteres, retornará o erro: A non-numeric value encountered
$number1 = '34';
echo $number1 + 56;
echo "\n";


// — Double:
$number2 = 34;
$number3 = '44'; // O PHP entenderá que é um numérico.
// Função que verifica se é um número.
if (is_numeric($number2) && is_numeric($number3)) {
    echo 'é numerico';
}
else {
    echo 'não é numerico';
}
echo "\n";