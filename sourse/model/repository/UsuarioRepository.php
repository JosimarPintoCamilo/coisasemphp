<?php


namespace Source\Model\Repository;

use Source\Core\Banco\Conexao;
use Source\Model\Entity\Usuario;


class UsuarioRepository
{
    const tabela = "users";

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function buscar(int $id): Usuario
    {
        $sql = "select * from users where id = :id";
        $paramentros = "id={$id}";
        $stmt = $this->conexao->prepare($sql, $paramentros)->execute();

        return $stmt->fetchObject(Usuario::class);
    }

    public function buscarPeloEmail($email): Usuario
    {
        $sql = "select * from users where email = :email";
        $parametros = "email={$email}";
        $result = $this->conexao->prepare($sql, $parametros)->execute();

        return $result->fetchObject(Usuario::class);
    }

    public function buscarTodos($limit = 30, $offset = 0): array
    {
        $sql = "select * from users limit :limit offset :offset";
        $parametros = "limit={$limit}&offset={$offset}";
        $result = $this->conexao->prepare($sql, $parametros)->execute();

        return $result->fetchAll(\PDO::FETCH_CLASS, Usuario::class);
    }

    public function inserir()
    {

    }

    public function atualizar()
    {

    }

    public function deletar()
    {

    }

    private function camposObrigatorios()
    {

    }
}