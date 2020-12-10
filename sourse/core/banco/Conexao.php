<?php

namespace Source\Core\Banco;

use \PDO;
use \PDOException;


class Conexao
{
    private \PDO $conexao;
    private \PDOStatement $statement;


    public function prepare(string $sql, string $parametros = null): \PDOStatement
    {
        $stmt = $this->conexao->prepare($sql);

        if ($parametros) {
            parse_str($parametros, $parametrosEmFormaDeArray);
            foreach ($parametrosEmFormaDeArray as $param => $valor) {
                $tipo = (is_numeric($valor) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                $stmt->bindValue(":{$param}", "{$valor}", $tipo);
            }
        }

        return $stmt;
    }

    public function execute(): PDOStatement
    {
        $this->statement->execute();
        $var = $this->statement;
        return $var;
    }

    public function __construct()
    {
        $this->conexao = Connect::getInstance();
    }

}