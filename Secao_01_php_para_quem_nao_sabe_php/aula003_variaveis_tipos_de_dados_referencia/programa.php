<?php

/* Variáveis: */

// String:
$titulo = "Variáveis";


// Number:
$anoAtual = date('Y');


// Boolean:
$confirmar = true;
$negar = false;



/* Programa */

$anoAtual = date('Y');
$resultado;

if ($anoAtual == 2026) {
    $resultado = $confirmar;
}
else {
    $resultado = $negar;
}