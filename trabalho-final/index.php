<?php
include('./controller/login/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
    <title>Login</title>
</head>

<body class="text-center">
    <form method="POST" class="form-signin">
    <img class="mb-4" src="images/logo.png" alt="Logo">
        <h1 class="h3 mb-3 font-weight-normal">Trabalho PHP</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="login" placeholder="Login" value="<?php echo $_COOKIE['login'] ?>" name="login">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Senha" value="<?php echo $_COOKIE['password'] ?>" name="password">
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" id="entrar" name="entrar">Entrar</button>
    </form>
</body>

<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>

</html>