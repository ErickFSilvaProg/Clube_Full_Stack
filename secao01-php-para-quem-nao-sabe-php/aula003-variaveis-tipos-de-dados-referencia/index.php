<?php

// Tipo de dados:
// string: Tudo que pode ser colocado entre 'aspas simples' ou "aspas duplas".
echo gettype('Erick Ferreira');
echo "\n\n";

// number: integer ou double(float)
echo gettype(39);
echo "\n";
echo gettype(10.4);
echo "\n\n";

// boolean: true ou false
echo gettype(10 == 10);
echo "\n";
echo gettype(true);
echo "\n";
echo gettype(false);
echo "\n\n";

// array:
echo gettype(["text", 10, 1.2, true, []]);
echo "\n\n";

// object: Objetos.
class Person {
    public function teste() {}
}

echo gettype(new Person);
echo "\n\n";


// null: Auxência de valor.
echo gettype(null);
echo "\n\n";


// Variáveis:
