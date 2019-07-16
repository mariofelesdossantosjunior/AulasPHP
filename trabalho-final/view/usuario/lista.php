<?php
/*Sessao*/
include('../../controller/sessaoController.php');
/*Header*/
include_once("../base/header.php");
/*NavBar*/
include_once("../base/navbar.php");
/**Controller */
require("../../controller/usuarioController.php");
?>
<div class="jumbotron text-center">
    <h1>Lista de Usuários</h1>
</div>

<div class="container-fluid">
    <a class="btn btn-lg btn-primary mb-2" href="editar.php" role="button">Novo Usuário</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data Nascimento</th>
                <th scope="col">Data Cadastro</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $usuarios = getUsuarios();

            if (mysqli_num_rows($usuarios) > 0) :
                while ($usuario = mysqli_fetch_assoc($usuarios)) :
                    echo " <tr>
                     <td>" . $usuario['id'] . "</td>
                     <td>" . $usuario['nome'] . "</td>
                     <td>" . $usuario['email'] . "</td>
                     <td>" . $usuario['datanascimento'] . "</td>
                     <td>" . $usuario['datacadastro'] . "</td>
                     <td>" . ($usuario['status'] ? 'Ativo' : 'Inativo') . "</td>
                     <td><a href='editar.php?id=" . $usuario['id'] . "'>Alterar</td>
                     <td><a href='excluir.php?id=" . $usuario['id'] . "'>Excluir</td>
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