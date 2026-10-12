<?php
session_start();
session_destroy();
header("Location: Lat3_6login.php");
exit();
?>