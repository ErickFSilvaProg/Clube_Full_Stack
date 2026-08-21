<?php

$names = ['Alexandre','Maria','João'];
$carros = array('Gol', 'Uno', 'Kwid');

var_dump($names[0]);
var_dump($names[1]);
var_dump($names[2]);
echo "\n";


// 
for ($i = 0; $i < count($names); $i++) {
    echo "{$names[$i]}\n";
}
echo "\n";


// 
for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] . "\n";
}
echo "\n";

array_push($carros, 'Corola');

for ($i = 0; $i < count($carros); $i++) {
    echo "{$carros[$i]} \n";
}
echo "\n";