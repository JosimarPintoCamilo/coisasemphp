<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

const NAMESPACE_CONTROLLERES = "Source\Controllers";

$rotas = new Router(CONF_URL_BASE);

$rotas->namespace(NAMESPACE_CONTROLLERES);
$rotas->get("/", "HomeController:home");

$rotas->namespace(NAMESPACE_CONTROLLERES)->group("/oops");
$rotas->get("/{codeerror}", "HomeController:error");

$rotas->dispatch();

if ($rotas->error()) {
    $rotas->redirect("/oops/{$rotas->error()}");
}

ob_end_flush();