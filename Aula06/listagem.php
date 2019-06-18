<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My First PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        </br>
        <h1 class="display-5">Usuários Cadastrados</h1>
        </br>
        <table class="table pt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>

                <?php

                require("conexao.php");

                $sql = "select * from usuario";
                $resultado = mysqli_query($conexao, $sql) or die("Erro nan consulta.");

                if (mysqli_num_fields($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {

                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $linkAlterar = "<a href='alterarUsuario.php?id={$id}'>Alterar</a>";
                        $linkExcluir = "<a href='excluirUsuario.php?id={$id}'>Excluir</a>";

                        echo "<tr>
                                <th>$id</th>
                                <td>$nome</td>
                                <td>$linkAlterar</td>
                                <td>$linkExcluir</td>
                              </tr>";
                    }
                }

                mysqli_close($conexao);

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>