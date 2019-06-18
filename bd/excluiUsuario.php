<?php

if (isset($_GET['id'])) {

    //Conecta no BD
    require("conexao.php");

    //Prepara a SQL para excluir o registro
    $sql = "delete from usuario where id = " . $_GET['id'];

    //Executa a SQL
    mysqli_query($conexao, $sql) or die("Erro na exclusão.");

    //Fecha a conexão
    mysqli_close($conexao);

    echo "Registro excluido com sucesso. <br><Br>";
    echo "<a href='listagemUsuario.php'>Voltar</a>";
}