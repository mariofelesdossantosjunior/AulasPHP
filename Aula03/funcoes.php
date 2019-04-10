<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 02/04/19
 * Time: 19:24
 */

/**
 * Função responsavel pela criação
 * do cabeçalho
 */
function cabecalho($nome, $idLogin)
{
    echo "_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_<br/>";
    echo "_+_+_+_+_+_+_+_+_+_+_+_+_+_+IFPR+_+_+_+_+_+_+_+_+_+_+_+_+<br/>";
    echo "Bem Vindo, $nome<br/>";
    echo "Seu id de Login é $idLogin<br/>";
    echo "_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_<br/>";
}
/** Função responvel pelo calculo do delta
 * @param $a
 * @param $b
 * @param $c
 * @return float
 */
function delta($a, $b, $c)
{
    $delta = ($b * $b) - 4 * $a * $c;
    return $delta;
}