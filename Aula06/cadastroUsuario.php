<?php
include("menu.php");

if ($_POST) {

    require("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $observacao = $_POST['observacao'];

    //Prepare SQL
    $sql = "insert into usuario (nome, email, senha, obs) 
    values('{$nome}','{$email}','{$senha}','{$observacao}')" or die("Erro no sql do cadastro");

    //Executa SQL
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: listagem.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My First PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="container">
        </br>
        <h1 class="display-5">Cadastro Usuários</h1>
        </br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Usuario</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $usuario['nome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $usuario['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" class="form-control" name="senha" required>
            </div>
            <div class="form-group">
                <label for="">Observação</label>
                <input type="text" class="form-control" name="observacao" value="<?php echo $usuario['obs'] ?>">
            </div>
            <br><br>
            <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </form>
    </div>
</body>

</html>