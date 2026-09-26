<?php
include_once("config.php");
 
// get id
$id = $_GET['id'];
 
// delete id sesuai row
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
 
// balik ke index
header("Location:index.php");
?>