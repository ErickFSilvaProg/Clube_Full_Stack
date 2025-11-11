<?php 

/**
 * - Tipos de dados string.
 * 
 *      Tudo que estiver dentro de aspas duplas ou aspas simples é considerado uma string:
 *      
 *          Com aspas simples, o php não interpreta o valor da variável.
 *          Com aspas duplas, o php interpreta o valor das variáveis.
 * 
 * 
 *      - Funções:
 *      
 *          strlen() - Conta o número de caracteres.
 *          substr() - Fatia a string.
 *          str_containts() - Verifica se a string contém alguma coisa.
 *                            Retorna '1' se encontrar. Retorna 'vazio' se não encontrar.
 */


$name = "Erick Ferreira da Silva";
echo "$name - " . gettype($name);
echo "\n";

$profissao = 'Programador, $name';
echo $profissao;
echo "\n";

$profissao = "Programador, {$name}";
echo $profissao;
echo "\n";


echo strlen($name);
echo "\n";

echo substr($name, 0, 5);
echo "\n";

echo str_contains($name, "Ferreira") ? "Contém [Ferreira]" : "Não contém [Ferreira]";
echo "\n";