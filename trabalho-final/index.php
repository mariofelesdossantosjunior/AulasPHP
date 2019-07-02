<?php
include("cookie.php");

$login = $_POST{'login'};
$password = $_POST{'password'};
$entrar = $_POST{'entrar'};

if (isset($entrar)) {
    if ($login == $_COOKIE['login'] && $password == $_COOKIE['password'] ) {
        header("location: inicial.php");
        createSession($login, $password);
    } else {
        header("location: erro.php");
    }
}

function createSession($login, $password)
{
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand text-white">Login</a>
</nav>
<div class="container" style="margin-top: 100px">
    <form method="POST">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login"
                   placeholder="Login" value="<?php echo $_COOKIE['login'] ?>"
                   name="login">
            <small id="loginHelp" class="form-text text-muted">Digite seu login</small>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Senha"
                   value="<?php echo $_COOKIE['password'] ?>" name="password">
        </div>
        <button type="submit" class="btn btn-primary" id="entrar" name="entrar">Entrar</button>
        <button type="reset" class="btn btn-danger" value="Reset">Limpar</button>
    </form>
</div>
</body>
</html>