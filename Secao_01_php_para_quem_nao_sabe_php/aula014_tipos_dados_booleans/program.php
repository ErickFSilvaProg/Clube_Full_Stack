<?php

// Variáveis:
$name = 'Alexandre';
$age = 38;
$logged = false;
$_SESSION['logged'] = false; // Variável super global.


// Exemplo 1:
if ($name) {
    echo "Verdadeiro";
}
echo "\n";


// Exemplo 2:

if ($_SESSION['logged']) {
    echo "Logado";
}
echo "\n";


// Exemplo 3:
for ($i = 0; $i < 10; $i++) {
    echo "{$i}, ";
}
echo "\n";


// Exemplo 4:
if ($name && $age > 18 && !$logged) {
    echo "É verdadeiro";
}
else {
    echo "É falso";
}