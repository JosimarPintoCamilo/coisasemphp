<?php

namespace Source\Core\Banco;

use \PDO;
use \PDOException;


class Connect
{
    const HOST = "localhost";
    const PORT = "3306";
    const DBNAME = "upinside";
    const USER_NAME = "root";
    const PASSWORD = "";


    const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . self::HOST     . ';dbname=' . self::DBNAME,
                    self::USER_NAME,
                    self::PASSWORD,
                    self::OPTIONS
                );
                echo "<h1>Conexão com banco realizada!</h1>";
            } catch (PDOException $E) {
                die("<h1>Deu erro na conexao com o banco de dados...</h1>");
            }
        }
        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

}