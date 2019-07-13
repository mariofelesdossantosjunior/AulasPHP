<?php
/*Header*/
include_once('../base/header.php');
include('../../controller/usuario/usuarioController.php');
?>

    <div class="jumbotron text-center">
        <h1>Cadastrar/Alterar Usuários</h1>
    </div>

    <div class="container-fluid">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="nome"
                           aria-describedby="nomeId" value="<?php echo $usuario['nome'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                           aria-describedby="emailId" value="<?php echo $usuario['email'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                           aria-describedby="helpId" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dataNascimento">Data Nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"
                           placeholder="Data Nascimento" aria-describedby="helpId"
                           value="<?php echo $usuario['datanascimento'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="observacao">Observação</label>

                    <input type="text" name="observacao" id="observacao" class="form-control" placeholder="Observação"
                           aria-describedby="helpId" value="<?php echo $usuario['observacao'] ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="1" <?= ($usuario['status']) ? "selected" : "" ?>>Sim</option>
                        <option value="0" <?= (!$usuario['status']) ? "selected" : "" ?>>Não</option>
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