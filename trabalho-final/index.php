<?php
include('./controller/loginController.php');
/*Header*/
include_once("./view/base/header.php");
?>
<link rel="stylesheet" href="css/signin.css">
<div class="center text-center">
    <form method="POST" class="form-signin">
        <img class="mb-4 text" src="images/logo.png" alt="Logo">
        <h1 class="h3 mb-3 font-weight-normal">Trabalho PHP</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="login" placeholder="Login" name="login" value="admin">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Senha" name="password" value="123">
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" id="entrar" name="entrar">Entrar</button>
    </form>
</div>

<?php
/*Footer*/
include_once("./view/base/footer.php");
?>