<?php

session_start();
$_SESSION['authenticated'] = false;
header("location: login.php");
