<?php

/*
    — Array em PHP:

        Transformação e Mapeamento:

            array_map: Aplica uma função a cada item do array.
            array_merge: Junta dois ou mais arrays.
            array_column: Pega os valores de uma única coluna em um array multidimensional.
        
        Busca e Filtragem:
        
            array_filter: Retira elementos usando uma regra.
            in_search / in_array: Checa se um valor existe no array.
            array_keys / array_values: Retorna só as chaves ou só os valores.
            
        Adição e Remoção:
        
            array_push: Adiciona item no fim.
            array_pop: Remove item do fim.
            
            array_unshift: Adicionar item no início.
            array_shift: Remove item do início.


    — Funções para Array:

        https://www.php.net/manual/pt_BR/ref.array.php

*/


// Array:
$data = ['Alexandre','Maria','João',34,true,false];


// — Exemplo 1:
var_dump($data); // Retorna o valor e o tipo.
echo "\n";

print_r($data); // Retorna o valor.
echo "\n";


// — Exemplo 2:
print_r($data[1]);
echo "\n";

var_dump($data[5]);
echo "\n";


// — Exemplo 3: Adicionar elemento no final do array.
// Opção quando se sabe a última posição do array.
$data[6] = 'last';

print_r($data);
echo "\n";

// Conta o número de elementos do array.
$data[count($data)] = 'Marte';

print_r($data);
echo "\n";

// Adicionar um elemento no array sempre na após seu último elemento existente.
array_push($data, 'Último elemento');

print_r($data);
echo "\n";


// — Exemplo 4: Adicionar elemento no início do array.
array_unshift($data, 'Início do array');

print_r($data);
echo "\n";


// — Exemplo 5: Criando índices específicos.
$person = ['name' => 'Alexandre', 'age' => '38'];

print_r($person['name']);
echo "\n";


// — Arrays multidimencionais e com índices específicos:
$person2 = [
    'name' => 'Alexandre', 
    'age' => '38', 
    'documents' => [
        'cpf' => '12345678901', 
        'rg' => '421456734'
        ]
    ];

print_r($person2['documents']);
echo "\n";

print_r($person2['documents']['cpf']);
echo "\n";