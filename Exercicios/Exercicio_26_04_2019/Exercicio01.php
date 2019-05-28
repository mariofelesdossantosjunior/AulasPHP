<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro Exercicio</title>
</head>

<body>
<p>
    1. Receba um texto (via textarea) de um formulário HTML e faça os seguintes processos:<br/>
    a. Mostre quantos caracteres o texto possui.<br/>
    b. Mostre qual é o primeiro e o último caractere do texto. <br/>
    c. Mostre a posição da primeira letra "a" que existe no texto.<br/>
    d. Substitua toda ocorrência do espaço " " por “$”. <br/>
    e. Mostre apenas os primeiros 15 caracteres do texto.<br/>
</p>
<br/><br/><br/>
<form method="POST">
        <textarea name="texto" id="texto" rows="15" cols="50">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur cum cupiditate dolore dolorum facere fugit modi nesciunt nihil officia omnis provident quos ratione sed similique suscipit, tempora? Atque, nam.
        </textarea>
    <br/>
    <input name="botao" type="submit" value="Enviar">
</form>
</body>
</html>

<?php
if (!empty($_POST)) {
    if (isset($_POST['botao'])) {
        $texto = $_POST['texto'];

        $quantidadeCaracter = strlen($texto);
        $primeiroCaracter = substr($texto, 0, 1);
        $ultimoCaracter = substr($texto, -1);

        echo "O texto possui " . $quantidadeCaracter . " caracteres";
        echo "O primeiro caracter " . $primeiroCaracter;
        echo "O ultimo caracter " . $ultimoCaracter;
    }
}
?>