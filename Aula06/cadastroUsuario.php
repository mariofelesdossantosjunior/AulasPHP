<?php
if ($_POST) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $observacao = $_POST['observacao'];

    //Cria a Conexão
    $conexao = mysqli_connect('localhost', 'root', '', 'ifpr-ads');

    //Prepare SQL
    $sql = "insert into usuario (nome, email, senha, observacao) 
    values('{$nome}','{$email}','{$senha}','{$observacao}')";

    //Executa SQL
    mysqli_query($conexao, $sql);
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
        <input type="text" name=""><br>
        <label for="">Email</label>
        <input type="text" name=""><br>
        <label for="">Senha</label>
        <input type="text" name=""><br>
        <label for="">Ativo</label><br>
        <label for="">Sim <input type="radio" name="opc" value="true"></label>
        <label for="">Não <input type="radio" name="opc" value="false"></label><br>
        <label for="">Observação</label>
        <input type="text" name=""><br><br>
        <input type="submit" value="Cadastrar" name="botao">
    </form>
</fieldset>
</body>
</html>