<?php


namespace Source\Core\Banco;

use Source\Core\Banco\Conexao;

class GerenciadorDB
{
    private \PDO $conexao;

    private function exec(string $sql)
    {
        try {
            $this->conexao->exec($sql);
        } catch (PDOException $E) {
        }
    }

    private function query(string $sql)
    {
        try {
            $this->conexao->query($sql);
        } catch (PDOException $E) {
        }
    }

    public function __construct()
    {
        $this->conexao = Conexao::getInstance();
    }

    public function executeEscalar()
    {

    }

    public function find(int $id)
    {
        $this->query();
    }

    public function findAll(string $tabela)
    {

    }

    public function insert(string $sql)
    {

    }

    public function delete(string $sql)
    {

    }

    public function update(string $sql)
    {

    }
}