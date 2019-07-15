<?php
/*Header*/
include_once('../base/header.php');
include_once('../base/navbar.php');
?>
<div class="jumbotron text-center">
    <h1>Lista de Categorias</h1>
</div>

<div class="container-fluid">
    <a class="btn btn-lg btn-primary mb-2" href="editar.php" role="button">Nova Categoria</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php
            require("../../controller/categoriaController.php");
            $categorias = getCategorias();

            if (mysqli_num_rows($categorias) > 0) :
                while ($categoria = mysqli_fetch_assoc($categorias)) :
                    echo " <tr>
                     <td>" . $categoria['id'] . "</td>
                     <td>" . $categoria['descricao'] . "</td>
                     <td>" . ($categoria['status'] ? 'Ativo' : 'Inativo') . "</td>
                     <td><a href='editar.php?id=" . $categoria['id'] . "'>Alterar</td>
                     <td><a href='excluir.php?id=" . $categoria['id'] . "'>Excluir</td>
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