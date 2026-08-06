<?php

$names = ['Alexandre','Maria','João'];

var_dump($names[0]);
var_dump($names[1]);
var_dump($names[2]);
echo "\n";


// 
for ($i = 0; $i < count($names); $i++) {
    echo "{$names[$i]}\n";
}
echo "\n";