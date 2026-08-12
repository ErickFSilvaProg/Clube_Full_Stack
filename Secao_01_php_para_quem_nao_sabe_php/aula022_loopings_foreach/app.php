<?php

// Utilizado para varrer o conteúdo dos arrays.


// Arrey:
$names = ['João','Braga','Pedro'];


// foreach (para cada): Opção sem "key".
foreach ($names as $name) {
    echo $name;
    echo "\n";
}
echo "\n";


// foreach (para cada): Opção com "key".
foreach ($names as $key => $name) {
    echo $key . ' => ' . $name;
    echo "\n";
}
echo "\n";
