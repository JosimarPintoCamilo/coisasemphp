<?php

function url(string $caminho)
{
    return CONF_URL_BASE . "/" . ($caminho[0] == "/" ? "" : $caminho);
}

function redirect(string $url)
{
    header("HTTP/1.1 302 Redirect");
    $urlCompleta = url($url);
    header("Location: {$urlCompleta}");
}

function session(): \Source\Core\Sessao
{
    return new \Source\Core\Sessao();
}

function csrf_input(): string
{
    session()->gerarCSRF();
    return "<input type='hidden' name='csrf' value='" . (session()->csrf_token ?? "") . "'/>";
}

function csrf_verify($request): bool
{
    if (empty(session()->csrf_token) || empty($request['csrf']) || session()->csrf_token != $request['csrf']) {
        return false;
    }
    return true;
}
