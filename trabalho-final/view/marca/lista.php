<?php
/*Header*/
include_once('../base/header.php');
include_once('../base/navbar.php');
?>
<div class="jumbotron text-center">
    <h1>Lista de Marcas</h1>
</div>

<div class="container-fluid">
    <a class="btn btn-lg btn-primary mb-2" href="editar.php" role="button">Nova Marca</a>
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
            require("../../controller/marcaController.php");
            $marcas = getMarcas();

            if (mysqli_num_rows($marcas) > 0) :
                while ($marca = mysqli_fetch_assoc($marcas)) :
                    echo " <tr>
                     <td>" . $marca['id'] . "</td>
                     <td>" . $marca['descricao'] . "</td>
                     <td>" . ($marca['status'] ? 'Ativo' : 'Inativo') . "</td>
                     <td><a href='editar.php?id=" . $marca['id'] . "'>Alterar</td>
                     <td><a href='excluir.php?id=" . $marca['id'] . "'>Excluir</td>
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