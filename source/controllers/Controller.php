<?php


namespace Source\Controllers;


use League\Plates\Engine;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new Engine();
        $this->view->addFolder('views', __DIR__ . "/../../site/tema1/views");
    }
}