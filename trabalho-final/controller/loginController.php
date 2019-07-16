<?php

/**
 * Conecta na base de dados
 */
require("funcoesController.php");

if (isset($_POST)) {

    if (isset($_POST{'entrar'})) {

        $login = $_POST{'login'};
        $password = $_POST{'password'};
        
        if (verificaUsuario($login, $password)) {
            header("location: view/menu/menu.php");
            createSession($login, $password);
        } else {
            header("location: view/login/erro.php");
        }
    }
}

/**
 * Verifica Login e Senha no banco
 */
function verificaUsuario($login, $password)
{
    /*
    Logando com ByCrpt
    */
    $sql = "select senha from usuario where nome = '{$login}'";
    $resultado = executaSQL($sql);
    $senha = mysqli_fetch_assoc($resultado);
    
    return (crypt($password, $senha['senha']) === $senha['senha']);
}

/**
 * Adiciona o usuario na sessão
 */
function createSession($login, $password)
{
    session_start();

    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
}
