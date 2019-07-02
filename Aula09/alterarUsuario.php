<?php

//Conecta no BD
require("conexao.php");

if (isset($_POST['atualizar'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];
    $status = $_POST['status'];
    

    $sql = "update usuario
               set nome       = '{$nome}',
                   email      = '{$email}',
                   observacao = '{$observacao}',
                   status = {$status}
             where id         = {$id}";

    $resultado = mysqli_query($conexao, $sql) or die("Erro na atualização.");

    echo "Registro atualizado com sucesso.";
}

if ($_GET['id']) {
    //Prepara a SQL para excluir o registro
    $sql = "select * from usuario where id = " . $_GET['id'];

    //Executa a consulta
    $resultado = mysqli_query($conexao, $sql) or die("Erro na consulta.");

    //Verifica se teve algum registro como resultado da consulta
    if (mysqli_num_rows($resultado) > 0) {
        $linha = mysqli_fetch_assoc($resultado);
    } else {
        echo "ID não encontrado.";
    }
} else {
    echo "Não foi informado o id";
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
    //Inclui o menu
    include("menu.php");
    ?>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">

        Nome*: <input type="text" name="nome" required value="<?php echo $linha['nome'] ?>"><br>
        Email*: <input type="text" name="email" required value="<?php echo $linha['email'] ?>"><br>
        Senha: <input type="password" name="senha"><br>
        Observação:
        <textarea name="observacao" cols="60" rows="15"><?php echo $linha['observacao'] ?></textarea><br><br>

        Ativo:Ativo
        <select name="status">
            <option value="1" <?= ($linha['status']) ? "selected" : "" ?>>Sim</option>
            <option value="0" <?= (!$linha['status']) ? "selected" : "" ?>>Não</option>
        </select>

        <input type="submit" name="atualizar" value="Atualizar">
        <input type="reset" value="Limpar">
    </form>

</body>

</html>