<?php
require("funcoesController.php");

/* Função responsavel por recuperar 
os Clientes do Banco */
function getClientes()
{
    $sql = "select * from cliente";
    return executaSQL($sql);
}


/*Função responsavel por atualizar
ou criar um novo cliente*/
if (isset($_POST['salvar'])) {

    $id = $_GET['id'];

    $nomeFantasia = $_POST['nomefantasia'];
    $razaoSocial = $_POST['razaosocial'];
    $tipoCliente = $_POST['tipocliente'];
    $cpfCnpj = $_POST['cpfcnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $status = $_POST['status'];
    $observacao = $_POST['observacao'];

    if (isset($id)) { //Altera cliente
        $sql = "update cliente set 
            nomefantasia    = '{$nomeFantasia}',
            razaosocial     = '{$razaoSocial}',
            tipocliente     = '{$tipoCliente}',
            cpfcnpj         = '{$cpfCnpj}',
            email           = '{$email}',
            telefone        = '{$telefone}',
            endereco        = '{$endereco}',
            cidade          = '{$cidade}',
            estado          = '{$estado}',
            cep             = '{$cep}',
            observacao      = '{$observacao}',
            status          = {$status}
            where id        = {$id}";
        echo $sql;
    } else { //Insere cliente
        $sql = "insert into cliente (
                nomefantasia, razaosocial, tipocliente, 
                cpfcnpj, email, telefone, endereco, cidade, 
                estado, cep, observacao, status 
                )values (
                '{$nomeFantasia}', 
                '{$razaoSocial}', 
                '{$tipoCliente}',
                '{$cpfCnpj}', 
                '{$email}', 
                '{$telefone}', 
                '{$endereco}', 
                '{$cidade}', 
                '{$estado}', 
                '{$cep}', 
                '{$observacao}', 
                '{$status}')";
    }

    //Executa a SQL
    $resultado = executaSQL($sql);

    if ($resultado === TRUE) {
        header("location: ../../view/cliente/lista.php");
    } else {
        echo "Erro ao cadastrar Cliente";
    }
}

/* Função usada para recuperar os dados do Cliente */
if (isset($_GET['id'])) {
    $sql = "select * from cliente where id = " . $_GET['id'];
    $resultado = executaSQL($sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $cliente = mysqli_fetch_assoc($resultado);
    } else {
        echo "Cliente não encontrado!";
    }
}else{
    $cliente = null;
}

/*Função respoonsavel por remover cliente*/
function deleteCliente($id)
{
    if (isset($id)) {

        //Prepara a SQL para excluir o registro
        $sql = "delete from cliente where id = " . $_GET['id'];

        //Executa a SQL
        $resultado = executaSQL($sql);

        if ($resultado === TRUE) {
            header("location: ../../view/cliente/lista.php");
        } else {
            echo "Erro ao deletar Cliente";
        }
    }
}
?>
