<?php

require __DIR__ . "/sourse/autoload.php";

use Source\Database\Connect;

$bancoDados = Connect::getInstance();

echo "<pre>";
var_dump(
    $bancoDados
);
echo "</pre>";

echo "<h1>Como inserir no banco?</h1>";

/*
 * o comando exec retorna zero ou um, utiliza-lo para
 */

$sql = "
    INSERT INTO users (first_name, last_name, email, document)
VALUES
	('Robson','Santos','robson1@email.com.br',NULL);
";

try {
    echo "<pre>";
    var_dump(
        $bancoDados->query($sql)
    );
    echo "</pre>";

    echo "<h1>Como listar dados do banco?</h1>";

    $sql = "
    select *from users limit 4;
";
    $usuarios = $bancoDados->query($sql);

    echo "<pre>";
    var_dump(
        $usuarios->rowCount(),
        $usuarios->fetchAll()
    );
    echo "</pre>";

    echo "<h1>Como atualizar dados do banco?</h1>";

    $sql = "
    update users set document = '1';
";
    echo "<pre>";
    var_dump(
        $bancoDados->exec($sql)
    );
    echo "</pre>";

    echo "<h1>Como deletar dados do banco?</h1>";

    $sql = "
    delete from users where id > 60;
";
    echo "<pre>";
    var_dump(
        $bancoDados->exec($sql)
    );
    echo "</pre>";
} catch (PDOException $exception) {
    echo "<pre>";
    var_dump(
        $exception
    );
    echo "</pre>";
}