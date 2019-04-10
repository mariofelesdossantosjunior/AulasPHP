<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 09/04/19
 * Time: 19:36
 */
//Abre o arquivo no modo leitura (r)
$recurso = file("meu_arquivo.txt");

foreach ($recurso as $key => $value) {
    echo "{$key} - {$value}<br>";
}


