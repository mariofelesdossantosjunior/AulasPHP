<?php

function executaSQL($sql) {
    //Conecta no BD
    require("conexao.php");

    //Executal SQL
    $resultado = mysqli_query($conexao, $sql) or die("Erro no SQL.");
    
    //Fecha a conexão
    mysqli_close($conexao);
    
    //Retorna resultado
    return $resultado;
}


?>