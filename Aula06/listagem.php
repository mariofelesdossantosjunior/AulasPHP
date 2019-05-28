<?php

require("conexao.php");

$sql = "select * from usuario";
$resultado = mysqli_query($conexao, $sql) or die("Erro nan consulta.");

if (mysqli_num_fields($resultado) > 0) {

    while ($linha = mysqli_fetch_assoc($resultado)) {

        $id = $linha['id'];
        $linkAlterar = "<a href='alterarUsuario.php?id={$id}'>Alterar</a>";
        $linkExcluir = "<a href='excluirUsuario.php?id={$id}'>Excluir</a>";

        echo "ID " . $id . " - Nome: " . $linha['nome'] . " | " . $linkAlterar . " | " . $linkExcluir . "</br>";
    }
}else{
    echo "Nenhum registro encontrado";
}


mysqli_close($conexao);
