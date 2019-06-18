<?php


if ($_GET) {
    $id = $_GET['id'];

    if (isset($id)) {

        require("conexao.php");

        $sql = "delete from usuario where id =" . $id;

        mysqli_query($conexao, $sql) or die("Erro no sql de exclusão");

        mysqli_close($conexao);

        header("Location: listagem.php");
    }
}
