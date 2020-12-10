<?php


namespace Source\Core\Banco;

use \PDO;
use \PDOException;

class Connect
{
    const HOST = CONF_DB_HOST;
    const DBNAME = CONF_DB_NAME;
    const USER_NAME = CONF_DB_USER;
    const PASSWORD = CONF_DB_PASS;

    const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static \PDO $instance;

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {

            self::$instance = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME,
                self::USER_NAME,
                self::PASSWORD,
                self::OPTIONS
            );
        }
        echo "Conectado";
        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }
}