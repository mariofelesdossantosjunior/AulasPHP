<?php

require("../../data/funcoes.php");


/* Função responsavel por recuperar 
os Usuarios do Banco */
function getUsuarios()
{
    $sql = "select * from usuario";
    return executaSQL($sql);
}


/*Função responsavel por atualizar
ou criar um novo usuario*/
if (isset($_POST['salvar'])) {

    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $dataNascimento = $_POST['dataNascimento'];
    $observacao = $_POST['observacao'];
    $status = $_POST['status'];

    if (isset($id)) { //Altera Usuario
        $sql = "update usuario set 
            nome            = '{$nome}',
            email           = '{$email}',
            senha           = '{$senha}',
            datanascimento  = '{$dataNascimento}',
            observacao = '{$observacao}',
            status = {$status}
            where id        = {$id}";
        echo $sql;
    } else { //Insere Usuario
        $sql = "insert into usuario (nome, email, senha, 
        datanascimento, observacao, status)
            values (
            '{$nome}', 
            '{$email}', 
            '{$senha}',
            '{$dataNascimento}', 
            '{$observacao}', 
            '{$status}')";
    }

    //Executa a SQL
    $resultado = executaSQL($sql);

    if ($resultado === TRUE) {
        header("location: ../../view/usuario/lista.php");
    } else {
        echo "Erro ao cadastrar Usuário";
    }
}

/* Função usada para recuperar os dados do Usuario */
if ($_GET['id']) {

    $sql = "select * from usuario where id = " . $_GET['id'];
    $resultado = executaSQL($sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
    } else {
        echo "Usuário não encontrado!";
    }
}

/*Função respoonsavel por remover usuario*/
function deleteUsuario($id)
{
    if (isset($id)) {

        //Prepara a SQL para excluir o registro
        $sql = "delete from usuario where id = " . $_GET['id'];

        //Executa a SQL
        $resultado = executaSQL($sql);

        if ($resultado === TRUE) {
            header("location: ../../view/usuario/lista.php");
        } else {
            echo "Erro ao deletar Usuário";
        }
    }
}
