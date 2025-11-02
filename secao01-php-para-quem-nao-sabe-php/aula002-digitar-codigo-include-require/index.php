<?php

/**
 * - include: 
 * 
 *      Com o 'include' o PHP retorna uma mensagem de erro, caso haja algum erro, e continua a execução da página.
 * 
 * - require: 
 * 
 *      Com o 'required' o PHP retorna uma mensagm de erro, caso haja algum erro, e para a execução da página.
 * 
 * - include_once: 
 * 
 *      Com o 'include_once' o PHP realisa a importação do arquivo apenas uma vez, caso seja duplicado.
 *      O PHP retorna uma mensagem de erro, caso haja algum erro, e continua a execução da página. 
 * 
 * - require_once: 
 * 
 *      Com o 'require_once' o PHP realisa a importação do arquivo apenas uma vez, caso seja duplicado.
 *      O PHP retorna uma mensagm de erro, caso haja algum erro, e para a execução da página.
 */

// include:
include "./person.php";
echo $name;

// required:
require "./person.php";
echo " $sobrenome";

// include_once:
include_once "./person.php";
echo "<br>$idade";

// require_once:
require_once "./person.php";
echo "<br>$profissao";