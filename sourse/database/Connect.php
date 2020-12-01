<?php

namespace Source\Database;

use \PDO;
use \PDOException;


class Connect
{
    const HOST = "ec2-52-204-232-46.compute-1.amazonaws.com";
    const PORT = "5432";
    const DBNAME = "dror30uor1rib";
    const USER_NAME = "jaepvlubbonhcv";
    const PASSWORD = "028b7d2ffcd22ed33666231f57018a4bd88a728640de14a93db09319cdb96296";


    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO('pgsql:dbname=' . self::DBNAME . ' host=' . self::HOST,
                    self::USER_NAME,
                    self::PASSWORD,
                    self::OPTIONS
                );
                echo "<h1>Conexão com banco realizada!</h1>";
            } catch (PDOException $E) {
                die("<h1>kkkkkk Deu erro no banco de dados...</h1>");
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