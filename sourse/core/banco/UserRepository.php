<?php


namespace Source\Core\Banco;


class UserRepository
{
    protected static $camposNaoPossoManipular = ["id", "created_at", "update_at"];
    const tabela = "users";

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function buscar(int $id)
    {
        $sql = "select * from users where id = 2";
        $paramentros = "id={$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        var_dump(
            $stmt->fetch()
        );
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