<?php

/**
 * Conecta na base de dados
 */
require("funcoesController.php");

if (isset($_POST)) {

    if (isset($_POST{'entrar'})) {
        $login = $_POST{
        'login'};
        $password = $_POST{
        'password'};

        if (verificaUsuario($login, $password)) {
            echo 'Sucesso';
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
    $sql = "select COUNT(id) as acessar from usuario 
                WHERE 
                nome = '{$login}' 
                    AND 
                senha = '{$password}';";

    $resultado = executaSQL($sql);
    $data = mysqli_fetch_assoc($resultado);

    return $data['acessar'] != 0;
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


/**
 * Adiciona o usuario no cokie
 */
/*function createCookie($login, $password)
{
    setcookie("login", $login, time() + (60 * 60 * 24)); //1 Dia
    setcookie("password", $password, time() + (60 * 60 * 24));//1 Dia
}*/
