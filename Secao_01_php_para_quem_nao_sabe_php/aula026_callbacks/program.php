<?php

/*
    ● Etapas:

        1. O que é callback?
            ↪ São funções passadas como parâmetro para outras funções.
        
        2. Verificar se é callback com is_callable.

        3. call_user_func (Espera um callback como parâmetro).
            ↪ Chama uma função e seu(s) parâmetro(s).
            ↪ Chama o primeiro parâmetro como array, caso ele seja um objeto, com método estático ou não e queira usar um método dele.
        
        4. call_user_func dentro de outras funções.

        5. __invoke (método mágico) pode ser passado como callback.

*/


// Etapa 1: callback simples ***********************
function saudacao($nome) {
    return 'Olá, meu nome é ' . $nome;
}

function executor($callback) {
    return $callback('Erick');
}

echo executor('saudacao');
echo "\n";


// Etapa 2: Verificar se é callback com is_callable ***********************
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
echo "\n\n";


// Etapa 3: call_user_func ***********************
// Opção 1:
function exibeMunicipio($municipio) {
    return "Moro no município de {$municipio}";
}

$nomeCidade = readline('Informe a cidade que mora: ');
echo call_user_func('exibeMunicipio', $nomeCidade);
echo "\n\n";


// Opção 2:
class User {
    public function coletaNome($nome, $nascido) {
        return "Olá, meu nome é {$nome} e nasci em {$nascido}.";
    }
}

$user = new User;
$nome = readline("Informe seu nome: ");
$nascido = readline('Você nasceu em que ano? ');

echo call_user_func([$user, 'coletaNome'], $nome, $nascido);
echo "\n\n";


// Etapa 4: call_user_func dentro de outras funções ***********************
function coletaAnoAtual($anoAtual) {
    return $anoAtual;
}

function executora4($callback4) {
    $anoAtual = readline('Em que ano estamos: ');
    return 'Estamos no ano de ' . call_user_func($callback4, $anoAtual);
}

echo executora4('coletaAnoAtual');
echo "\n\n";


// Etapa 5: __invoke pode ser passado como callback ***********************
class User5 {
    public function __invoke() {
        return 'Função __invoke';
    }
}

$user = new User5;

function executora5($callback5) {
    return $callback5();
}

echo executora5($user);
echo "\n\n";