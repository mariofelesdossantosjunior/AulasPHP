<?php
require("funcoesController.php");

/* Função responsavel por recuperar 
os Clientes do Banco */
function getMarcas()
{
    $sql = "select * from marca";
    return executaSQL($sql);
}


/*Função responsavel por atualizar
ou criar um nova Marca*/
if (isset($_POST['salvar'])) {

    $id = $_GET['id'];

    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    if (isset($id)) { //Altera Usuario
        $sql = "update marca set 
            descricao       = '{$descricao}',
            status          = {$status}
            where id        = {$id}";
        echo $sql;
    } else { //Insere Usuario
        $sql = "insert into marca (
                descricao, status 
                )values (
                '{$descricao}', 
                '{$status}')";
    }

    //Executa a SQL
    $resultado = executaSQL($sql);

    if ($resultado === TRUE) {
        header("location: ../../view/marca/lista.php");
    } else {
        echo "Erro ao cadastrar Marca";
    }
}

/* Função usada para recuperar os dados do Marca */
if (isset($_GET['id'])) {
    $sql = "select * from marca where id = " . $_GET['id'];
    $resultado = executaSQL($sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $marca = mysqli_fetch_assoc($resultado);
    } else {
        echo "Marca não encontrado!";
    }
}else{
    $marca = null;
}

/*Função respoonsavel por remover marca*/
function deleteMarca($id)
{
    if (isset($id)) {

        //Prepara a SQL para excluir o registro
        $sql = "delete from marca where id = " . $_GET['id'];

        //Executa a SQL
        $resultado = executaSQL($sql);

        if ($resultado === TRUE) {
            header("location: ../../view/marca/lista.php");
        } else {
            echo "Erro ao deletar Marca";
        }
    }
}
?>
