<?php

$person = function($name) {
    return $name;
};

echo $person('Erick');
echo "\n";


// 
function carro() {

    $person = function() {
        return "Onix";
    };

    return $person();

}

var_dump(carro());