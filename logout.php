<?php
    session_start();

    $_SESSION['login'] = false;
    session_unset();
    header("Location: login.php")
?>
