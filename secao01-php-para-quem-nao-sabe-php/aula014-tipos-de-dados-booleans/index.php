<?php

/**
 * - Tipos de dados - boolean.
 * 
 * Strings não vazias tem valores 'truthy'. Comportando-se como um boolean 'true'.
 */


// Variáveis:
$_SESSION["logged"] = true;
$name = "Erick";
$age = 38;
$logged = false;


// Exemplo 1:
if ($name) {
    echo "Falso true";
    echo "\n";
}


// Exemplo 2: Variável super global do PHP.
if ($_SESSION["logged"]) {
    echo "É verdadeiro";
    echo "\n";
} else {
    echo "É falso";
    echo "\n";
}


// Exemplo 3:
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
echo "\n";


// Exemplo 4:
if ($name === "Erick" && $age > 18 && $logged === true) {
    echo "É verdadeiro";
    echo "\n";
} else {
    echo "É falso";
    echo "\n";
}