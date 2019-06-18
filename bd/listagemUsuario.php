<?php
//Inclui o menu
include("menu.php");


//Conecta no BD
require("conexao.php");

//Prepara a SQL de consulta
$sql = "select * from usuario";

//Executa a consulta
$resultado = mysqli_query($conexao, $sql) or die("Erro na consulta.");

//Verifica se teve algum registro como resultado da consulta
if (mysqli_num_rows($resultado) > 0) {

    //Percorre cada registro do resultado
    while ($linha = mysqli_fetch_assoc($resultado)) {
        
        $id = $linha['id'];

        $linkAlterar = "<a href='alterarUsuario.php?id={$id}'>Alterar</a>";
        $linkExcluir = "<a href='excluiUsuario.php?id={$id}'>Excluir</a>";
        
        echo $id . " | " . $linha['nome'] . " | " . $linha['email'] . " | " . (($linha['status']) ? "Ativo" : "Inativo") . " | " .
        $linkAlterar . " | " . $linkExcluir . "<br>";
    }

} else {
    echo "Nenhum registro encontrado.";
}

//Fecha a conexão
mysqli_close($conexao);
?>