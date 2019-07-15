<?php
include("../../controller/categoriaController.php");

$id = $_GET['id'];

if (isset($id)) {
    deleteCategoria($id);
} else {
    echo "Categoria não encontrado!";
}
