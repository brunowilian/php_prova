<?php
session_start();
// verifica se existe um cookie PHPSESSID
// caso não exista, ele seta o cookie neste response
// caso já exista, ele não seta o cookie
// em ambas as situações, carrega os dados da sessão na variável $_SESSION
// ao final da execução do script, ele salva os dados na sessão do servidor
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

if (!isset($_SESSION['acessos'])) {
    $_SESSION['acessos'] = 0;
}

$_SESSION['acessos']++;

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>