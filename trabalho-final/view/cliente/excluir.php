<?php
include("../../controller/clienteController.php");

$id = $_GET['id'];

if (isset($id)) {
    deleteCliente($id);
} else {
    echo "Cliente não encontrado!";
}
