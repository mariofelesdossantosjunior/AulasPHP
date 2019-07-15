<?php
require("funcoesController.php");

/* Função responsavel por recuperar 
os Categorias do Banco */
function getCategorias()
{
    $sql = "select * from categoria";
    return executaSQL($sql);
}


/*Função responsavel por atualizar
ou criar um nova Categoria*/
if (isset($_POST['salvar'])) {

    $id = $_GET['id'];

    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    if (isset($id)) { //Altera categoria
        $sql = "update categoria set 
            descricao       = '{$descricao}',
            status          = {$status}
            where id        = {$id}";
        echo $sql;
    } else { //Insere categoria
        $sql = "insert into categoria (
                descricao, status 
                )values (
                '{$descricao}', 
                '{$status}')";
    }

    //Executa a SQL
    $resultado = executaSQL($sql);

    if ($resultado === TRUE) {
        header("location: ../../view/categoria/lista.php");
    } else {
        echo "Erro ao cadastrar categoria";
    }
}

/* Função usada para recuperar os dados do categoria */
if (isset($_GET['id'])) {
    $sql = "select * from categoria where id = " . $_GET['id'];
    $resultado = executaSQL($sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $categoria = mysqli_fetch_assoc($resultado);
    } else {
        echo "categoria não encontrado!";
    }
}else{
    $categoria = null;
}

/*Função respoonsavel por remover categoria*/
function deleteCategoria($id)
{
    if (isset($id)) {

        //Prepara a SQL para excluir o registro
        $sql = "delete from categoria where id = " . $_GET['id'];

        //Executa a SQL
        $resultado = executaSQL($sql);

        if ($resultado === TRUE) {
            header("location: ../../view/categoria/lista.php");
        } else {
            echo "Erro ao deletar categoria";
        }
    }
}
?>
