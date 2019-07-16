<?php
/*Sessao*/
include('../../controller/sessaoController.php');
/*Header*/
include_once("../base/header.php");
/*NavBar*/
include_once("../base/navbar.php");
/**Controller */
include("../../controller/marcaController.php");
?>

<div class="jumbotron text-center">
    <h1>Cadastrar/Alterar Marcas</h1>
</div>

<div class="container-fluid">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao" value="<?php echo $marca['descricao'] ?>" required>
            </div>
            <div class="form-group col-md-2">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="1" <?= ($marca['status']) ? "selected" : "" ?>>Sim</option>
                    <option value="0" <?= (!$marca['status']) ? "selected" : "" ?>>Não</option>
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