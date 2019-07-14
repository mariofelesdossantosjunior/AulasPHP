<?php

session_start();
//Destroi a sessão
session_destroy();

header("location: ../index.php");
