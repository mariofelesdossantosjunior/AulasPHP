<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 09/04/19
 * Time: 19:36
 */
//Abre o arquivo no modo leitura (r)
$recurso = fopen("meu_arquivo.txt" ,"r");

//Percore o arquivo texto linha a linha

while (!feof($recurso)) {
    $linha = fgets($recurso);
    echo  htmlspecialchars($linha)."<br>";
}

fclose($recurso);