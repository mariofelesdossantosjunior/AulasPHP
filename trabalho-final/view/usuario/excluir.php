<?php
include('../../controller/usuario/usuarioController.php');

$id = $_GET['id'];

if (isset($id)) {
    deleteUsuario($id);
} else {
    echo "Usuário não encontrado!";
}
