<?php

/*
    — Os operadores lógicos em PHP servem para juntar ou mudar regras de verdadeiro e falso, sendo os principais && (E), || (OU) e ! (NÃO). Eles ajudam a criar testes e caminhos diferentes no seu código.
    
        && (E): O resultado é verdadeiro apenas se ambas as partes forem verdadeiras.
        
        || (OU): O resultado é verdadeiro se pelo menos uma das partes for verdadeira.
        
        xor (OU Exclusivo): O resultado é verdadeiro se uma parte for verdadeira, mas não as duas ao mesmo tempo.
        
        ! (NÃO / Negação): Inverte o valor; se for verdadeiro, vira falso, e vice-versa.

*/


// Variáveis:
$canAccess = true;
$isOlder = false;


// 
var_dump($canAccess && $isOlder);
echo "\n";

var_dump($canAccess || $isOlder);
echo "\n";

var_dump($canAccess xor $isOlder);
echo "\n";

var_dump(!$canAccess);
echo "\n";