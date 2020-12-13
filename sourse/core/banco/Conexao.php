<?php

namespace Source\Core\Banco;

use \PDO;
use \PDOException;


class Conexao
{
    private \PDO $conexao;
    private \PDOStatement $statement;

    public function prepare(string $sql, string $parametros = null): Conexao
    {
        $stmt = $this->conexao->prepare($sql);

        if ($parametros) {
            parse_str($parametros, $parametrosEmFormaDeArray);
            foreach ($parametrosEmFormaDeArray as $param => $valor) {
                $tipo = (is_numeric($valor) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                $stmt->bindValue(":{$param}", "{$valor}", $tipo);
            }
        }

        $this->statement = $stmt;
        return $this;
    }

    public function execute(): \PDOStatement
    {
        $this->statement->execute();

        return $this->statement;
    }

    public function __construct()
    {
        $this->conexao = ConnectMySql::getInstance();
    }

}