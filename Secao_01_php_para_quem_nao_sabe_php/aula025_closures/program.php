<?php

// Toda variável que recebe uma função anônima torna-se um "objeto do tipo closure".

$person = function($name) {
    // Objeto do tipo "clasure".
    return $name;
};

var_dump($person("Erick"));
echo "\n";


function profissao($area) {

    if ($area == "Programador") {

        $person = function($linguagem) use ($area) {

            return "{$area} {$linguagem}";
        };

        return $person("PHP");

    }
    else {

        return "Outra profissão";
    }

}

echo profissao("Programador");
echo "\n";