<?php

$login = "teste";
$password = "123";

setcookie("login", $login, time() + (60 * 60 * 24));//1 Dia
setcookie("password", $password, time() + (60 * 60 * 24));//1 Dia
?>