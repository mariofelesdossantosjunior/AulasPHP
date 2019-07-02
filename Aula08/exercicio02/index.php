<?php

session_start();

$login = $_POST{'login'};
$password = $_POST{'password'};
$entrar = $_POST{'entrar'};

if (isset($entrar)) {

    echo "Login: $login";
    echo "Senha: $password";

    if ($login == 'Mario' && $password == '1993') {
        header("location: inicial.php");

        if (isset($_SESSION['tentativas'])) {
            unset($_SESSION['tentativas']);
        }

    } else {
        $_SESSION['tentativas']++;

        if ($_SESSION['tentativas'] >= 3) {
            header("location: bloqueado.php");
        } else {
            header("location: erro.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

<form method="POST">
    <input type="text" id="login" placeholder="Login" value="Mario" name="login">
    <input type="text" id="password" placeholder="Senha" value="1993" name="password">
    <button type="submit" id="entrar" name="entrar">Entrar</button>
</form>
</body>
</html>