<?php
include("../../controller/produtoController.php");

$id = $_GET['id'];

if (isset($id)) {
    deleteProduto($id);
} else {
    echo "Produto não encontrado!";
}
