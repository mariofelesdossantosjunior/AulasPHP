<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvar Produto</title>
</head>

<body>

<?php
//Codigo PHP
$nome = $_GET{'nome'};
$preco = $_GET{'preco'};

//
$host = "localhost";
$user = "postgres";
$password = "Pkg1522pam";
$database = "ifpr";

$db = pg_connect("host=${host} port=5432 dbname=${database} user=${user} password=${password}");

if (!$db) {
    echo "Erro ao fazer conexão DataBase\n";
} else {
    $sql = "insert into produto (nome, preco) values('{$nome}',{$preco})";
    pg_query($db, $sql);
}
?>

<h1>O
    <?php echo $nome ?>
    ao preço de R$
    <?php echo $preco ?>
    foi inserido com sucesso.</h1>


</body>

</html>