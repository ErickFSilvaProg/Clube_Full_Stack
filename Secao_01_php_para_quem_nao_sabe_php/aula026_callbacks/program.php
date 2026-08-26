<?php

/*
    ● Etapas:

        1. O que é callback?
            ↪ São funções passadas como parâmetro para outras funções.
        
        2. Verificar se é callback com is_callable.

        3. call_user_func (Espera um callback como parâmetro).
            ↪ Chama uma função e seu parâmetro.
            ↪ Chama o primeiro parâmetro como array, caso ele seja um objeto, com método estático ou não e queira usar um método dele.

*/


// Etapa 1 ***************************:
function saudacao($nome) {
    return 'Olá, meu nome é ' . $nome;
}

function executor($callback) {
    return $callback('Erick');
}

echo executor('saudacao');
echo "\n";


// Etapa 2 ***************************:
function exibeCarro($carro) {
    return "Carro escolhido: {$carro}";
}

function executor2($callback2) {

    // Verifica se o "callback" é uma função.
    if (is_callable($callback2)) {
        return $callback2('Gol');
    }
    else {
        return 'Não é um callback.';
    }

}

$addCarro = 'exibeCarro';
echo executor2($addCarro);
echo "\n";


// Etapa 3 ***************************:
function exibeMunicipio($municipio) {
    return "Moro no município de {$municipio}";
}

// É utilizado para passar um callback com os parâmetros da função.
echo call_user_func('exibeMunicipio','Garanhuns');
echo "\n";