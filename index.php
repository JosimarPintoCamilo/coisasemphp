<?php

require __DIR__ . "/sourse/autoload.php";

echo "<pre>";

echo "<br><br>";
$UsuarioRepository = new \Source\Core\Banco\UserRepository;


$usuario = $UsuarioRepository->buscar(2);
var_dump(
    $usuario,
    $usuario->getNome(),
    $usuario->getEmail(),
    $usuario->getDocumento()
);


echo "</pre>";
