<?php

// Crie uma função que receba um inteiro positivo e teste para saber se ele é primo ou não. Faça um script que recebe um inteiro n do usuário e mostra todos os números primos existentes no intervalo de 1 até n.


function numerosPrimos($n) {

    $divisores = 0;
    $multiplos = [];
    
    // Laço para testar todos os números menores que N.
    for ($count = 2; $count < $n; $count++) {

        // Testando se a divisão é exata (resto igual a zero).
        if ($n % $count == 0) {

            // echo "Múltiplo encontrado: {$count}\n";
            array_push($multiplos, $count);
            $divisores++; // Incrementa contador de divisores.

        }

    }

    // Avaliação Final.
    if ($divisores > 0) {

        echo "Não é primo!\n";
        echo "O número {$n} tem {$divisores} divisor(es) além de 1 e dele mesmo.\n";
        echo "Multiplo(s) encontrado(s): ";
        foreach ($multiplos as $divisor) {
            echo "[{$divisor}] ";
        }

    }
    else {

        // Números menores ou iguais a 1 não são primos por definição.
        if ($n <= 1) {

            echo "Não é primo!\n";
            echo "Números menores ou iguais a 1 não são considerados primos\n";

        }
        else {

            echo "É primo!\n";
            echo "O numero {$n} é divisível APENAS por 1 e por ele mesmo.\n";

        }

    }

}

numerosPrimos(5);