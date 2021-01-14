<?php


namespace Source\Core\Banco;


class Model
{
    private \PDO $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getInstance();
    }

    public function buscar(string $select, string $parametros = null): ?\PDOStatement
    {
        $stmt = $this->conexao->prepare($select);

        if ($parametros) {
            parse_str($parametros, $parametrosEmFormaDeArray);
            foreach ($parametrosEmFormaDeArray as $param => $valor) {
                $tipo = (is_numeric($valor) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                $stmt->bindValue(":{$param}", "{$valor}", $tipo);
            }
        }

        $stmt->execute();
        return $stmt;
    }

    public function atualizar()
    {

    }

    public function deletar()
    {

    }

    protected function retirar_campos_brigatorios(): array
    {

    }

    private function filtrar()
    {

    }

}