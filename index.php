<?php

require __DIR__ . "/sourse/autoload.php";

use Source\Model\Entity\Usuario;
use Source\Model\Repository\UsuarioRepository;

echo "<pre>";

$session = new \Source\Core\Session();
$session->inserir("usuario", 22);
$session->inserir("cidade", "periquito");
$session->regenerar();

$user = (new UsuarioRepository())->buscar(1);

$session->inserir("usuario", $user);

var_dump(
    $session->getSession()->cidade,
    $session->usuario()
);

echo "</pre>";
