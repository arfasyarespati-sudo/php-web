<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: Lat3_6login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
    
    <form action="Lat3_6b.php" method="post">
        <p>
            Order CD, amount: 
            <input type="text" name="cd_order" value="<?php echo isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : '0'; ?>" size="2" maxlength="2">
        </p>
        <p>
            Order DVD, amount: 
            <input type="text" name="dvd_order" value="<?php echo isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : '0'; ?>" size="2" maxlength="2">
        </p>
        <input type="submit" value="Add To Cart" name="submit">
    </form>
    
    <br>
    <a href="Lat3_6logout.php">Logout</a>
</body>
</html>