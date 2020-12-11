<?php


namespace Source\Core\Banco;

use Source\Model\Entity\Usuario;


class UserRepository
{
    const tabela = "users";

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function buscar(int $id): Usuario
    {
        $sql = "select * from users where id = 2";
        $paramentros = "id={$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchObject(Usuario::class);
    }

    public function buscarPeloEmail($email)
    {

    }

    public function buscarTodos($limit = 30, $offset = 0)
    {

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