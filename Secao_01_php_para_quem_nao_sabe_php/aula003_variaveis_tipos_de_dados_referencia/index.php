<?php

require_once 'programa.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titulo ?></title>
    <!-- Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"crossorigin="anonymous"></script>
    <!-- CSS -->
    
</head>

<body>
    <div class="container">
    
        <header>
            <h1>
                Variáveis em PHP
            </h1>
        </header>

        <p>
            Ano atual: <?= $anoAtual ?>
        </p>
        <p>
            Estamos em 2026? <br>
            <b><?= $resultado ? "Sim, estamos em $anoAtual" : "Não, estamos em $anoAtual" ?></b>
        </p>
        <p>
            Quem está confirmou presença:<br>
            <?= $nome ?>
        </p>
    
    </div>
</body>

</html>