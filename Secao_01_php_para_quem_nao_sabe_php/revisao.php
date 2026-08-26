<?php

$listaCidade = [];

function addCidade($listaCidade, $cidade) {
    array_push($listaCidade, $cidade);
    return $listaCidade;
}

$listaCidade = call_user_func('addCidade', $listaCidade, 'Garanhuns');
$listaCidade = call_user_func('addCidade', $listaCidade, 'Caruaru');
$listaCidade = call_user_func('addCidade', $listaCidade, 'Recife');

print_r($listaCidade);