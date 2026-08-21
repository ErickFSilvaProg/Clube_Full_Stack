<?php

/* **************************************
Variáveis: */

// String:
$titulo = "Variáveis";


// Number:
$anoAtual = date('Y');


// Boolean:
$confirmar = true;
$negar = false;


// Array:
$listaNomes = ['Pedro','João','Carlos'];

foreach ($listaNomes as $nome) {
    $nome;
}


// Objetos:
class Pessoa {}
$pessoa = gettype(new Pessoa);


// Null: Auxencia de valor:
$idade = null;


/* **************************************
Passando valor por referência */

$nome1 = "Cláudio";
$nome2 = &$nome1;
echo "$nome2\n";

$nome1 = "Francisco";
echo "$nome1\n";
echo "$nome2\n";


/* **************************************
Programa */

$resultado;

if ($anoAtual == 2026) {
    $resultado = $confirmar;
}
else {
    $resultado = $negar;
}