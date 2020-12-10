<?php

require __DIR__ . "/sourse/autoload.php";

echo "<pre>";

echo "<br><br>";
$conexao = new \Source\Core\Banco\UserRepository;


$conexao->buscar(2);


echo "</pre>";
