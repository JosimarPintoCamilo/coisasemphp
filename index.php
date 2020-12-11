<?php

require __DIR__ . "/sourse/autoload.php";

echo "<pre>";

echo "<br><br>";
$conexao = new \Source\Core\Banco\UserRepository;


$usuario = $conexao->buscar(2);
var_dump(
    $usuario,
    $usuario->getNome(),
    $usuario->getEmail(),
    $usuario->getDocumento()
);


echo "</pre>";
