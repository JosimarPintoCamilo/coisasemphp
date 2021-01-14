<?php

namespace Source\Controllers;

class HomeController extends Controller
{
    public function home(): void
    {
        echo "<h1>Josimar home</h1>";
    }

    public function error(array $codeError): void
    {
        var_dump($codeError);
    }
}