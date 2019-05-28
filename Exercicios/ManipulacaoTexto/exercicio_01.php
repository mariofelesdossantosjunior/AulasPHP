<?php
$texto = "IFPR - Campus Umuarama";
echo strlen($texto) . "<br/><br/>";
echo strtoupper($texto) . "<br/><br/>";
echo strtolower($texto) . "<br/><br/>";
$nome = "JOSE ANTONIO DA SILVA";
echo ucwords(strtolower($nome));
echo "<hr>";
$nomes = ["Pedro", "Jose", "Antonio", "Lucas"];

$result = "";
foreach ($nomes as $nome) {
    $result .= $nome . " , ";
}
echo substr(trim($result), 0, -1);
echo "<hr>";

$texto = "Humorista Maurício Meirelles apresenta em Umuarama o show 'Levando o Caos";
$partes = explode(" ", $texto);
foreach ($partes as $key => $value) {
    echo $key . " - " . $value . "<br>";
}
echo "<hr>";

$texto = "01951515; JOSE LUIZ DA SILVA; 35; ADMINISTRADOR";
$partes = explode(";", $texto);

echo "Codigo: {$partes[0]}<br>";
echo "Nome: {$partes[1]}<br>";
echo "Idade: {$partes[2]}<br>";
echo "Função: {$partes[3]}<br>";
echo "<hr>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Manipulando Strings</title>
</head>

<body>
</body>
</html>