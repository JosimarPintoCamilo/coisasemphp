<?php

namespace Core;

use Source\Model\Entity\Usuario;

class Sessao
{

    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    public function getSession(): Sessao
    {
        return $this;
    }

    public function __get($name)
    {
        return (!empty($_SESSION[$name]) ? $_SESSION[$name] : null);
    }

    public function __isset($name): bool
    {
        return $this->existeChave($name);
    }

    public function inserir(string $chave, $valor): Sessao
    {
        $_SESSION[$chave] = (is_array($valor) ? (object)$valor : $valor);
        return $this;
    }

    public function remover(string $chave): Sessao
    {
        unset($_SESSION[$chave]);
        return $this;
    }

    public function existeChave(string $chave): bool
    {
        return isset($_SESSION[$chave]);
    }

    public function regenerar(): Sessao
    {
        session_regenerate_id(true);
        return $this;
    }

    public function destruir(): Sessao
    {
        session_destroy();
        return $this;
    }

    public function usuario(): Usuario
    {
        return $_SESSION["usuario"];
    }

    public function gerarCSRF(): void
    {
        $_SESSION["csrf_token"] = base64_encode(random_bytes(20));
    }
}