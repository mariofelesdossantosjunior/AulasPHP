<?php
/*Sessao*/
include('../../controller/sessaoController.php');
/*Header*/
include_once("../base/header.php");
/*NavBar*/
include_once("../base/navbar.php");
/**Controller */
include("../../controller/produtoController.php");
include("../../controller/unidadeMedidaController.php");
?>

<div class="jumbotron text-center">
    <h1>Cadastrar/Alterar Produtos</h1>
</div>

<div class="container-fluid">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao" value="<?php echo $produto['descricao'] ?>" required>
            </div>
            <div class="form-group col-md-2">
                <label for="codigointerno">Codigo Interno</label>
                <input type="text" name="codigointerno" id="codigointerno" class="form-control" placeholder="codigointerno" value="<?php echo $produto['codigointerno'] ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="codigobarras">Codigo Barras</label>
                <input type="number" name="codigobarras" id="codigobarras" class="form-control" placeholder="codigobarras" value="<?php echo $produto['codigobarras'] ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="unidade">Unidade</label>
                <select id="unidade" name="unidade" class="form-control" required>
                    <?= gerarUnidadeMedida($produto['unidade']); ?>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="1" <?= ($produto['status']) ? "selected" : "" ?>>Ativo</option>
                    <option value="0" <?= (!$produto['status']) ? "selected" : "" ?>>Inativo</option>
                </select>
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