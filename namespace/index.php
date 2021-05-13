<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gustavo");
$cad->setEmail("gloschisalomao@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;

?>