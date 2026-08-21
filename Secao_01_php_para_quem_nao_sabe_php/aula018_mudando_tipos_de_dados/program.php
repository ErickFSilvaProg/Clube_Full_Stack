<?php

// — Convertendo tipos de dados:


// ● Variáveis/Arrays:
$person = ['name' => 'Alexandre', 'age' => 38, 'proffession' => 'programmer'];
$name = 'Alexandre';
$number1 = 34;
$number2 = 23.45;
$ativo = true;

var_dump($name);
var_dump($person);
var_dump($number1);
var_dump($ativo);
echo "\n";


// ■ (string):
$change = (string) $number1;
var_dump($change);

$change = (string) $number2;
var_dump($change);
echo "\n";


// ■ (bool):
$change = (bool) $name;
var_dump($change);
echo "\n";


// ■ (float):
$change = (float) $number1;
var_dump($change);

$change = (float) $name;
var_dump($change);
echo "\n";


// ■ (int):
$change = (int) $number2;
var_dump($change);
echo "\n";


// ■ (double): Non-canonical cast (double) is deprecated. Use (float) instead.
// $changer = (double) $number;
// var_dump($change);


// ■ (object):
$change = (object) $person;
var_dump($change);
var_dump($change -> name);
echo "\n";


// ■ (array):
$change = (array) $name;
var_dump($change);
echo "\n";


// ◆ intval:
$change = intval($number2);
var_dump($change);


// ◆ floatval:
$change = floatval($number1);
var_dump($change);


// ◆ doubleval:
$change = doubleval($number1);
var_dump($change);


// ◆ strval:
$change = strval($number2);
var_dump($change);


// ◆ boolval:
$change = boolval($name);
var_dump($change);
echo "\n";