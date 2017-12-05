<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == false) {
  header('Location: login.php');
}
