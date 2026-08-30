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
            ↪ Instanciar objetos e passar como callbavk para call_user_func ou para outra função.
        
        6. call_user_func_array
            ↪ Passar parêmetros por array.
        
        7. Usar uma closure como callback.

*/


/* *********************************************************************
Etapa 1: callback simples */
function saudacao($nome) {
    return 'Olá, meu nome é ' . $nome;
}

function executor($callback) {
    return $callback('Erick');
}

echo executor('saudacao');
echo "\n";


/* *********************************************************************
Etapa 2: Verificar se é callback com is_callable */
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


/* *********************************************************************
Etapa 3: call_user_func */
// ↪ Chama uma função e seu(s) parâmetro(s).
function exibeMunicipio($municipio) {
    return "Moro no município de {$municipio}";
}

$nomeCidade = readline('Informe a cidade que mora: ');
echo call_user_func('exibeMunicipio', $nomeCidade);
echo "\n\n";


// ↪ Chama o primeiro parâmetro como array, caso ele seja um objeto, com método estático ou não e queira usar um método dele.
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


/* *********************************************************************
Etapa 4: call_user_func dentro de outras funções */
function coletaAnoAtual($anoAtual) {
    return $anoAtual;
}

function executora4($callback4) {
    $anoAtual = readline('Em que ano estamos: ');
    return 'Estamos no ano de ' . call_user_func($callback4, $anoAtual);
}

echo executora4('coletaAnoAtual');
echo "\n\n";


/* *********************************************************************
Etapa 5: __invoke pode ser passado como callback */
// ↪ Instanciar objetos e passar como callback para call_user_func ou para outra função.
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


/* *********************************************************************
Etapa 6: call_user_func_array */
// ↪ Passar parêmetros por array.
function pessoa6($name, $age) {
    return "Olá, meu nome é {$name} e tenho {$age} anos.";
}

echo call_user_func_array('pessoa6',['Erick','39']);
echo "\n\n";


/* *********************************************************************
Etapa 7: Usar uma closure como callback */
$saudacao7 = function($name) {
    return "Seja bem vindo(a), {$name}!";
};

$profissao7 = function($profissao, $empresa) {
    return "Você é {$profissao} na empresa {$empresa}";
};

function executora7($callback1, $callback2) {

    $resultado1 = '';
    $resultado2 = '';

    // callback1:
    if (is_callable($callback1)) {

        $name = readline('Qual o seu nome? ');
        $resultado1 = call_user_func($callback1, $name);
    
    }

    // callback2:
    if (is_callable($callback2)) {

        $profissao = readline('Qual a sua profissão? ');
        $empresa = readline('Qual o nome da sua empresa? ');
        $resultado2 = call_user_func_array($callback2, [$profissao, $empresa]);

    }

    return "\n{$resultado1}\n{$resultado2}";

}

echo executora7($saudacao7, $profissao7); // Aqui será inserido duas closures como parâmetro.
echo "\n\n";