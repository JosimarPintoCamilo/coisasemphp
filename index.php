<?php

require __DIR__ . "/sourse/autoload.php";

echo "<pre>";

$banco = \Source\Core\Banco\Connect::getInstance();

$usuario = $banco->prepare("select count(id) from users;");

var_dump($usuario);

//$usuario->bindValue(":num", 3, PDO::PARAM_INT);

//var_dump($usuario->queryString);


var_dump($usuario->execute(), $usuario->fetch());

echo "</pre>";
