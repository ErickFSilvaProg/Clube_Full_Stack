<?php

/**
 * - Tipo de dados:
 */

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


/**
 * - Variáveis:
 * 
 *      Se inicia uma variáveis em PHP com um '$' e em seguida com letras ou underline.
 *      Nomes de variáveis precisam referênciar o valor da mesma.
 *      O PHP é case sensitive na criação das variáveis.
 *      Para nomes compostos podemos utilizar dois padrões: camelCase ou snake_case;
 * 
 *      Podemos passar valores, de variável já criadas, por 'referência' para novas variáveis.
 * 
 *          $name = "Erick";
 *          $myName = &$name;
 */

$name = "Erick";
echo "$name - " . gettype($name);
echo "\n";

$idade = 39;
echo "$idade - " . gettype($idade);
echo "\n";

$fullName = "Erick Ferreira";
echo $fullName;
echo "\n";

$current_age = 38;
echo "$current_age anos";
echo "\n\n";

$myName = &$name; // Passando valor por referência.
$name = "Thiago";
echo $name;
echo "\n";
echo $myName;
echo "\n\n";