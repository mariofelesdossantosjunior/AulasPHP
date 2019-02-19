<?php
//Declarações de variaveis
$a = 10;
$b = 15.23;
$c = "Olá";

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo "{$c} <br>";

$a = $c;
echo $a . "<br>";
echo "<hr>";
//Operações Matematicas
$a = 20;
$b = 30;
$c = $a + $b;
echo $c . "<br>";

echo "<hr>";

//Estrutura Condicional
$d = 30;
if ($d > 0) {
    echo "Numero positivo";
} else if ($d < 0) {
    echo "O numero $d é um numero negativo";
} else if ($d == 0) {
    echo "O numero $d é um numero igual a zero";
}

echo "<hr>";
//Intervalo em condições
$f = 250.30;
if ($f > 0 && $f < 300) {
    echo "O numero $f é um numero valido";
} else {
    echo "O numero $f é um numero invalido";
}

echo "<hr>";

//If Com Negação
if ($f > 0):
    echo "Positivo";
endif;

echo "<hr>";
//Swith
$comida = "Macarrão";

switch ($comida) {
    case "feijão":
        echo "Você comeu feijão";
        break;
    case "Macarrão":
        echo "Você comeu macarrão";
        break;
    default:
        echo "Comida não conhecida";
        break;
}

echo "<hr>";
echo "Estrutura de repetição FOR<br>";
//Estrutura de repetição FOR
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";
echo "Estrutura de repetição WHILE<br>";
//Estrutura WHILE
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<hr>";
echo "Estrutura de repetição DO WHILE<br>";
//Estrutura WHILE
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);





