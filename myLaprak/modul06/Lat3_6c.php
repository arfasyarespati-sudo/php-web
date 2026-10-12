<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: Lat3_6login.php");
    exit();
}

$num_cd_order = $_COOKIE['cd_order'];
$num_dvd_order = $_COOKIE['dvd_order'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
    
    <p><u>Order Summary</u></p>
    <?php
    echo "Ordered CD: " . $num_cd_order . " pieces <br>";
    echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
    ?>
    <br>
    <a href="Lat3_6a.php">Edit Order</a>
    <br><br>
    <a href="Lat3_6logout.php">Logout</a>
</body>
</html>