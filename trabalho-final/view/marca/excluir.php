<?php
include("../../controller/marcaController.php");

$id = $_GET['id'];

if (isset($id)) {
    deleteMarca($id);
} else {
    echo "Marca não encontrado!";
}
