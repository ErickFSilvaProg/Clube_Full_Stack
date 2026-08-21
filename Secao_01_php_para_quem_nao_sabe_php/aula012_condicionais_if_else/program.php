<?php

// O "if" verifica se o valor da variável é verdadeiro ou falso:

// 
$isAdmin = true;
$number1 = 30;
$number2 = 50;
$resultado1 = $number1 > $number2 && "true" == true;
$resultado2 = $number1 > $number2 || "true" == true;


// 
if ($isAdmin) {
    echo "isAdmin\n";
}


// 
if ($resultado1) {
    echo "É verdadeiro";
}
else {
    echo "Não é verdadeiro";
}
echo "\n";


// 
echo ($resultado2) ? "Verdadeiro" : "Não Verdadeiro";
echo "\n";