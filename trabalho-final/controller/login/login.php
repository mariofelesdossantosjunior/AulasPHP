<?php

/**
 * Conecta na base de dados
 */
include('data/conexao.php');

$login = $_POST{
'login'};
$password = $_POST{
'password'};
$entrar = $_POST{
'entrar'};

if (isset($conexao)) {

    if (isset($entrar)) {
        if (verificaUsuario($login, $password, $conexao)) {
            header("location: view/menu/menu.php");
            createSession($login, $password);
            //createCookie($login, $password);
        } else {
            header("location: view/login/erro.php");
        }
    }
}

/**
 * Verifica Login e Senha no banco
 */
function verificaUsuario($login, $password, $conexao)
{
    $sql = "select COUNT(id) as acessar from usuario 
                WHERE 
                nome = '{$login}' 
                    AND 
                senha = '{$password}';";

    $resultado = mysqli_query($conexao, $sql) or die("Erro no sql de login.");
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
