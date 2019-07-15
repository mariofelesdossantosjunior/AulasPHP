<?php
/*Header*/
include_once('../base/header.php');
include_once('../base/navbar.php');
include("../../controller/produtoController.php");
include("../../controller/unidadeMedidaController.php");

?>
<div class="jumbotron text-center">
    <h1>Lista de Produtos</h1>
</div>

<div class="container-fluid">
    <a class="btn btn-lg btn-primary mb-2" href="editar.php" role="button">Novo Produto</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col">Codigo Interno</th>
                <th scope="col">Codigo Barras</th>
                <th scope="col">Unidade</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $produtos = getProdutos();
            if (mysqli_num_rows($produtos) > 0) :
                while ($produto = mysqli_fetch_assoc($produtos)) :
                    echo " <tr>
                     <td>" . $produto['id'] . "</td>
                     <td>" . $produto['descricao'] . "</td>
                     <td>" . $produto['codigointerno'] . "</td>
                     <td>" . $produto['codigobarras'] . "</td>
                     <td>" . getUnidadeSelecionada($produto['unidade']) . "</td>
                     <td>" . ($produto['status'] ? 'Ativo' : 'Inativo') . "</td>
                     <td><a href='editar.php?id=" . $produto['id'] . "'>Alterar</td>
                     <td><a href='excluir.php?id=" . $produto['id'] . "'>Excluir</td>
                  </tr>";
                endwhile;
            endif;
            ?>
        </tbody>
    </table>
</div>

<?php
/*Footer*/
include_once('../base/footer.php');
?>