<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();

    if (!isset($_SESSION['login']) && !isset($_SESSION['password'])) {
        header("location: ../../index.php");
    }
}

/*Header*/
include_once('../base/header.php');
/*Footer*/
include_once('../base/footer.php');
?>


