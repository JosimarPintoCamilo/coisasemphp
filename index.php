<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=upinside",
        "root",
        "",
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]
    );

    $users = $pdo->query("select * from users limit 3");
    while ($user = $users->fetch(PDO::FETCH_ASSOC)){
        echo "<pre>";
        var_dump($user);
        echo "</pre></br>";
    }
}catch (PDOException $E){
    echo "<pre>";
    var_dump($E);
    echo "</pre>";
}

require __DIR__ . "/sourse/autoload.php";

use Source\Database\Connect;
$pdo1 = Connect::getInstance();
$pdo2 = Connect::getInstance();

var_dump(
    $pdo1,
    $pdo2,
    Connect::getInstance()
);