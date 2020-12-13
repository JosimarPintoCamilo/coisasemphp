<?php


namespace Source\Core;


use Source\Model\Entity\Usuario;

class Session
{

    public function __construct()
    {
        if (!session_id()) {
            session_save_path(CONF_SESSAO_PATH);
            session_start();
        }
    }

    public function getSession()
    {
        return (object)$_SESSION;
    }

    public function __get($name)
    {
        return (!empty($_SESSION[$name]) ? $_SESSION[$name] : null);
    }

    public function __isset($name): bool
    {
        return $this->existeChave($name);
    }

    public function inserir(string $chave, $valor): Session
    {
        $_SESSION[$chave] = (is_array($valor) ? (object)$valor : $valor);
        return $this;
    }

    public function remover(string $chave): Session
    {
        unset($_SESSION[$chave]);
        return $this;
    }

    public function existeChave(string $chave): bool
    {
        return isset($_SESSION[$chave]);
    }

    public function regenerar(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    public function destruir(): Session
    {
        session_destroy();
        return $this;
    }

    public function usuario(): Usuario
    {
        return $_SESSION["usuario"];
    }
}