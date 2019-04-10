<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 09/04/19
 * Time: 19:36
 */
//Abre o arquivo no modo leitura (r)
$recurso = fopen("arquivo.txt", "r");
$saldo = 1000;

//Percore o arquivo texto linha a linha

echo "
<div class='container'>
    <table class='table'>
    <thead class='thead-dark'>
        <th>DATA MOV</th>
        <th>NR. DOC.</th> 
        <th>HISTÓRICO</th>
        <th>VALOR</th>
        <th>TIPO OPERAÇÃO</th>
        <th>SALDO</th>
    </thead>
";

while (!feof($recurso)) {
    $linha = fgets($recurso);

    list($data, $nr, $historico, $valor, $tipo) = explode(";", $linha);

    echo "<tbody>
            <td>$data</td>
            <td>$nr</td> 
            <td>$historico</td>
            <td>$valor</td>
            <td>$tipo</td>
            <td>$saldo</td>
        </tbody>
    ";

    $valor = corrigeCaracter($valor);

    if ($tipo == "D") {
        $saldo -= $valor;
    } else {
        $saldo += $valor;
    }

}

echo "
<tfoot class='thead-dark'>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Total</th>
<th>$saldo</th>
</tfoot>
</table>
</div>";
//echo "<p style='float: right'><b>Total: $saldo</b></p>";

fclose($recurso);


function corrigeCaracter($valor)
{
    $valor = str_ireplace(".", "", $valor);
    $valor = str_ireplace(",", ".", $valor);
    return $valor;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

</body>

</html>