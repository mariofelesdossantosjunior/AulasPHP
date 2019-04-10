<?php
include("funcoes.php");//Include ou Require

$a = 5;
$b = -3;
$c = 2;

$delta = delta($a, $b, $c);

cabecalho('Mario', 10);
echo "Esse é o delta $delta";