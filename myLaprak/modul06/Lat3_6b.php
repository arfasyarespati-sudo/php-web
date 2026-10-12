<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: Lat3_6login.php");
    exit();
}

if(isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    setcookie("cd_order", $_POST['cd_order']);
    setcookie("dvd_order", $_POST['dvd_order']);
    header("Location: Lat3_6c.php");
    exit();
}
?>