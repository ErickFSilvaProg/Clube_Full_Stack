<?php

/*
    — Tudo que estiver dentro de aspas simples ('') ou aspas duplas ("") é considerado uma string.

        Utilizaremos aspas duplas quando quisermos inserir uma variável dentro de uma string.

        
    — Lista de Funções e Métodos:
    
        https://www.php.net/manual/pt_BR/indexes.functions.php

*/

// Variáveis:
$name = "Erick";
$lastName ='Ferreira';
$age = 39;
$nameAge = "Erick {$age}";
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';


// Exemplo 1:
// A função gettype() no PHP serve para descobrir o tipo de dado de uma variável.
echo gettype($name);
echo "\n";
echo gettype($lastName);
echo "\n";


// Exemplo 2:
echo "$nameAge anos.";
echo "\n";


// Exemplo 3:
// A função strlen no PHP serve para retornar o tamanho de uma string em bytes.
echo strlen($name);
echo "\n";


// Exemplo 4:
// A função substr do PHP serve para cortar e retornar uma parte de um texto (string), usando três pontos principais: a string original, a posição de início e o tamanho opcional do corte.
echo substr($name, 0, strlen($name));
echo "\n";


// Exemplo 5:
// A função str_contains verifica se uma string contém uma substring específica, retornando true ou false. Ela foi introduzida no PHP 8.0 e faz diferenciação entre letras maiúsculas e minúsculas.
echo str_contains($lorem, 'dolor') ? 'existe': 'não existe';
echo "\n";