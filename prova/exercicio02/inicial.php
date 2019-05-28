<?php
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();

    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
        header("location: index.php");
    }
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
    <form class="form-inline" action="logout.php">
        <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
    </form>
</nav>
<div class="container" style="margin-top: 100px">
    <h1>Logado com Sucesso!</h1>
</div>
</body>
</html>