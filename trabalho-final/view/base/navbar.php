<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../menu/menu.php">Trabalho PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">Cadastros</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../usuario/lista.php">Usuário</a>
                    <a class="dropdown-item" href="#">Cliente</a>
                    <a class="dropdown-item" href="#">categoria</a>
                    <a class="dropdown-item" href="#">Marca</a>
                    <a class="dropdown-item" href="#">Produto</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="../../controller/logoutController.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>