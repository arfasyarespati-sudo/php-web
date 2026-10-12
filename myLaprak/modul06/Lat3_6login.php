<?php
session_start();

if(isset($_SESSION['user'])) {
    header("Location: Lat3_6a.php");
    exit();
}

$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    if($user == 'admin' && $password == 'admin') {
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        header("Location: Lat3_6a.php");
        exit();
    } else {
        $error = "User atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if($error != "") { echo "<p style='color:red;'>" . $error . "</p>"; } ?>
    
    <form method="post">
        <p>
            User: <input type="text" name="user" required>
        </p>
        <p>
            Password: <input type="password" name="password" required>
        </p>
        <input type="submit" value="Login">
    </form>
</body>
</html>