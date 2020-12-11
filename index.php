<?php

require __DIR__ . "/sourse/autoload.php";

use Source\Model\Entity\Usuario;
use Source\Model\Repository\UsuarioRepository;

echo "<pre>";

echo "<br><br>";
$UsuarioRepository = new UsuarioRepository();


$usuario = $UsuarioRepository->buscar(2);
var_dump(
    $usuario,
    $usuario->getNome(),
    $usuario->getEmail(),
    $usuario->getDocumento()
);
echo "<br>";
$usuario = $UsuarioRepository->buscarPeloEmail("josimarifmg@gmail.com");
var_dump(
    $usuario->getNome(),
    $usuario->getEmail()
);

echo "<br><br>";
$usuarios = $UsuarioRepository->buscarTodos();

/** @var Usuario $usuario */
foreach ($usuarios as $usuario){
    var_dump($usuario->getNome());
}


echo "</pre>";
