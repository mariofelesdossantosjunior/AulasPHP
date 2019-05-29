<?php

$usuario = recuperarusuario();

if ($_POST['alterar']) {
    updateUsuario($usuario['id']);
}

function recuperarusuario()
{
    if ($_GET) {
        $id = $_GET['id'];

        require("conexao.php");

        if (isset($id)) {

            $sql = "select * from usuario where id = " . $id or die("Erro na consulta");
            $resultado = mysqli_query($conexao, $sql) or die("Erro na consulta do usuario.");

            if (mysqli_num_rows($resultado) > 0) {
                return mysqli_fetch_assoc($resultado);
            } else {
                echo "Não foi possivel localizar o usuário";
            }

            mysqli_close($conexao);
        }
    }
}

function updateUsuario($id)
{
    require("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $observacao = $_POST['observacao'];

    $sql = "update usuario set 
        nome = '{$nome}',
        email = '{$email}',
        senha = '{$senha}', 
        obs = '{$observacao}'
        where id = " . $id;

    if (mysqli_query($conexao, $sql)) {
        echo "Usuário alterado com sucesso!.";
        header("location: listagem.php");
    } else {
        echo "Não foi possivel alterar o usuário";

    }

    mysqli_close($conexao);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuarios</title>
</head>

<body>
    <fieldset>
        <h1>Cadastro de Usuario</h1>
        <form action="" method="POST">
            <label for="">Usuario</label>
            <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>" required><br>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $usuario['email'] ?>" required><br>
            <label for="">Senha</label>
            <input type="password" name="senha" required><br>
            <label for="">Observação</label>
            <input type="text" name="observacao" value="<?php echo $usuario['obs'] ?>"><br><br>
            <input type="submit" value="Alterar" name="alterar">
            <input type="reset" value="Limpar">
        </form>
    </fieldset>
</body>

</html>