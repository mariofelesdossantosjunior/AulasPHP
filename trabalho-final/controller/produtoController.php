<?php
require("funcoesController.php");

/* Função responsavel por recuperar 
os produtos do Banco */
function getProdutos()
{
    $sql = "select * from produto";
    return executaSQL($sql);
}


/*Função responsavel por atualizar
ou criar um nova produto*/
if (isset($_POST['salvar'])) {

    $id = $_GET['id'];

    $codigointerno = $_POST['codigointerno'];
    $codigobarras = $_POST['codigobarras'];
    $descricao = $_POST['descricao'];
    $unidade = $_POST['unidade'];
    $status = $_POST['status'];

    if (isset($id)) { //Altera produto
        $sql = "update produto set 
            descricao       = '{$descricao}',
            codigobarras    = '{$codigobarras}',
            codigointerno   = '{$codigointerno}',
            unidade         = '{$unidade}',
            status          = {$status}
            where id        = {$id}";
        echo $sql;
    } else { //Insere produto
        $sql = "insert into produto (
                descricao, codigobarras, codigointerno, 
                unidade, status 
                )values (
                '{$descricao}', 
                '{$codigobarras}', 
                '{$codigointerno}', 
                '{$unidade}', 
                '{$status}')";
    }

    //Executa a SQL
    $resultado = executaSQL($sql);

    if ($resultado === TRUE) {
        header("location: ../../view/produto/lista.php");
    } else {
        echo "Erro ao cadastrar produto";
    }
}

/* Função usada para recuperar os dados do produto */
if (isset($_GET['id'])) {
    $sql = "select * from produto where id = " . $_GET['id'];
    $resultado = executaSQL($sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $produto = mysqli_fetch_assoc($resultado);
    } else {
        echo "categoria não encontrado!";
    }
}else{
    $produto = null;
}

/*Função respoonsavel por remover produto*/
function deleteProduto($id)
{
    if (isset($id)) {

        //Prepara a SQL para excluir o registro
        $sql = "delete from produto where id = " . $_GET['id'];

        //Executa a SQL
        $resultado = executaSQL($sql);

        if ($resultado === TRUE) {
            header("location: ../../view/produto/lista.php");
        } else {
            echo "Erro ao deletar produto";
        }
    }
}
?>
