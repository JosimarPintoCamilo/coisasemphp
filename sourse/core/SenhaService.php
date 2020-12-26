<?php


namespace Source\Core;


class SenhaService
{
    public function criptografar(string $senha): string
    {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificar(string $senhaInformada, string $senhaSalva): bool
    {
        return password_verify($senhaInformada, $senhaSalva);
    }
}