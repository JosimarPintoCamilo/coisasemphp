<?php

namespace Source\Database;

use \PDO;
use \PDOException;


class Connect
{
    const HOST = "localhost";
    const DBNAME = "upinside";
    const USER = "root";
    const PASSWORD = "";

    const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //todo erro que acontecer no pdo será convertido para esse tipo
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //converta qualquer resultado de pesquisa para objeto
        PDO::ATTR_CASE => PDO::CASE_NATURAL //conversao de nomes de colunas
    ];

    private static $instance;

    public static function getInstance()
    {
        if(empty(self::$instance)){
            try {
                self::$instance = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DBNAME,
                    self::USER,
                    self::PASSWORD,
                    self::OPTIONS
                );
                echo "<h1>Conectado com sucesso.</h1>";
            } catch (PDOException $E){
                die("<h1>Deu erro no banco de dados...</h1>");
            }
        }
        return self::$instance;
    }

    final private function  __construct()
    {
    }
    final private function __clone()
    {
    }

}