<?php
include("menu.php");

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
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My First PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="container">
        </br>
        <h1 class="display-5">Editar Usuários</h1>
        </br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Usuario</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $usuario['nome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $usuario['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" class="form-control" name="senha" required>
            </div>
            <div class="form-group">
                <label for="">Observação</label>
                <input type="text" class="form-control" name="observacao" value="<?php echo $usuario['obs'] ?>">
            </div>
            <br><br>
            <input type="submit" value="Alterar" name="alterar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </form>
    </div>
</body>

</html>