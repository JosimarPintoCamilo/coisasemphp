<?php

function url(string $caminho)
{
    return CONF_URL_BASE . "/" . ($caminho[0] == "/" ? mb_substr($caminho, 1) : $caminho);
}

function redirect(string $url)
{
    header("HTTP/1.1 302 Redirect");
    $urlCompleta = url($url);
    header("Location: {$urlCompleta}");
}
