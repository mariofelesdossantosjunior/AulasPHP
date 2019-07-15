<?php
/*Header*/
include_once('../base/header.php');
include_once('../base/navbar.php');
?>
<div class="jumbotron text-center">
    <h1>Lista de Clientes</h1>
</div>

<div class="container-fluid">
    <a class="btn btn-lg btn-primary mb-2" href="editar.php" role="button">Novo Cliente</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Tipo Cliente</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">CEP</th>
                <th scope="col">Observação</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php
            require("../../controller/clienteController.php");
            $clientes = getClientes();

            if (mysqli_num_rows($clientes) > 0) :
                while ($cliente = mysqli_fetch_assoc($clientes)) :
                    echo " <tr>
                     <td>" . $cliente['id'] . "</td>
                     <td>" . $cliente['nomefantasia'] . "</td>
                     <td>" . $cliente['razaosocial'] . "</td>
                     <td>" . ($cliente['tipocliente'] ? 'Fisico' : 'Juridico') . "</td>
                     <td>" . $cliente['cpfcnpj'] . "</td>
                     <td>" . $cliente['email'] . "</td>
                     <td>" . $cliente['telefone'] . "</td>
                     <td>" . $cliente['endereco'] . "</td>
                     <td>" . $cliente['cidade'] . "</td>
                     <td>" . $cliente['estado'] . "</td>
                     <td>" . $cliente['cep'] . "</td>
                     <td>" . $cliente['observacao'] . "</td>
                     <td>" . ($cliente['status'] ? 'Ativo' : 'Inativo') . "</td>
                     <td><a href='editar.php?id=" . $cliente['id'] . "'>Alterar</td>
                     <td><a href='excluir.php?id=" . $cliente['id'] . "'>Excluir</td>
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