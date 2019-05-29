<?php
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
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuarios</title>
</head>

<body>
    <fieldset>
        <h1>Cadastro de Usuario</h1>
        <form action="" method="POST">
            <label for="">Usuario</label>
            <input type="text" name="nome" required><br>
            <label for="">Email</label>
            <input type="text" name="email" required><br>
            <label for="">Senha</label>
            <input type="text" name="senha" required><br>
            <label for="">Observação</label>
            <input type="text" name="observacao"><br><br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
    </fieldset>
</body>

</html>