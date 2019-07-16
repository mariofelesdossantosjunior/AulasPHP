<?php
/*Sessao*/
include('../../controller/sessaoController.php');
/*Header*/
include_once("../base/header.php");
/*NavBar*/
include_once("../base/navbar.php");
/**Controller */
include("../../controller/clienteController.php");
?>

<div class="jumbotron text-center">
    <h1>Cadastrar/Alterar Cliente</h1>
</div>

<div class="container-fluid">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nomefantasia">Nome Fantasia</label>
                <input type="text" name="nomefantasia" id="nomefantasia" class="form-control" placeholder="nomefantasia" value="<?php echo $cliente['nomefantasia'] ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="razaosocial">Razão Social</label>
                <input type="text" name="razaosocial" id="razaosocial" class="form-control" placeholder="razaosocial" value="<?php echo $cliente['razaosocial'] ?>" required>
            </div>
            <div class="form-group col-md-2">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="1" <?= ($cliente['status']) ? "selected" : "" ?>>Sim</option>
                    <option value="0" <?= (!$cliente['status']) ? "selected" : "" ?>>Não</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="tipocliente">Tipo Cliente</label>
                <select id="tipocliente" name="tipocliente" class="form-control" required>
                    <option value="1" <?= ($cliente['tipocliente']) ? "selected" : "" ?>>Fisico</option>
                    <option value="0" <?= (!$cliente['tipocliente']) ? "selected" : "" ?>>Juridico</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="cpfcnpj">CPF/CNPJ</label>
                <input type="text" name="cpfcnpj" id="cpfcnpj" class="form-control" placeholder="cpfcnpj" value="<?php echo $cliente['cpfcnpj'] ?>" required>
            </div>
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone" value="<?php echo $cliente['telefone'] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo $cliente['email'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="endereco" value="<?php echo $cliente['endereco'] ?>">
            </div>
            <div class="form-group col-md-5">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="cidade" value="<?php echo $cliente['cidade'] ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="estado">UF</label>
                <select id="estado" name="estado" class="form-control" required>
                    <option value="0" <?= ($cliente['estado'] == "0") ? "selected" : "" ?>>SP</option>
                    <option value="1" <?= ($cliente['estado'] == "1") ? "selected" : "" ?>>PR</option>
                    <option value="2" <?= ($cliente['estado'] == "2") ? "selected" : "" ?>>MT</option>
                    <option value="3" <?= ($cliente['estado'] == "3") ? "selected" : "" ?>>PI</option>
                    <option value="4" <?= ($cliente['estado'] == "4") ? "selected" : "" ?>>AC</option>
                    <option value="5" <?= ($cliente['estado'] == "5") ? "selected" : "" ?>>RG</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" class="form-control" placeholder="cep" value="<?php echo $cliente['cep'] ?>">
            </div>
            <div class="form-group col-md-10">
                <label for="observacao">Observação</label>
                <input type="text" name="observacao" id="observacao" class="form-control" placeholder="observacao" value="<?php echo $cliente['observacao'] ?>">
            </div>
        </div>
        <div class="form-row">
            <a class="btn btn-danger w-100 col-md-2 mr-2" href="./lista.php">Cancelar</a>
            <button type="submit" class="btn btn-primary w-100 col-md-2" name="salvar">Salvar</button>
        </div>
    </form>
</div>

<?php
/*Footer*/
include_once('../base/footer.php');
?>