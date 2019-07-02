<?php

require("funcoes.php");

if ($_POST) {
    //Pega os valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $observacao = $_POST['observacao'];
    $status = $_POST['status'];
    
    //Prepara a SQL
    $sql = "insert into usuario (nome, email, senha, observacao, status)
        values ('{$nome}', '{$email}', '{$senha}', '{$observacao}', '{$status}')";
    
    //Executa a SQL
    $resultado = executaSQL($sql);
    
    $mensagem = "Registro salvo com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($mensagem)) {
        echo "<h2 style='color:red'>$mensagem</h2>";
    }

    //Inclui o menu
    include("menu.php");

    ?>
    <h1>Cadastrar Usuário</h1>
    <form action="cadastrarUsuario.php" method="post">

        Nome*: <input type="text" name="nome" required><br>
        Email*: <input type="text" name="email" required><br>
        Senha*: <input type="password" name="senha" required><br>
        Obsrvação: <textarea name="observacao" cols="60" rows="15">
        </textarea><br><br>

        Ativo:Ativo
        <select name="status">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">

    </form>
</body>
</html>