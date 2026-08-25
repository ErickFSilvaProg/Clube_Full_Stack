<?php

$baseLivros = [];
$adicionaLivro = function($livro) use (&$baseLivros) {
    array_push($baseLivros, $livro);
};

$adicionaLivro('Livro 1');
$adicionaLivro('Livro 2');

foreach($baseLivros as $livro) {
    echo "$livro\n";
}