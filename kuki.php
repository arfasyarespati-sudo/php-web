<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
    <form action="kuki.php" method="post">
        Name: <input type="text" name="name"><br>
        Username: <input type ="text" name="name"><br>
        <input type="submit">
    </form>
    <?php
        echo 'hi';
        session_Start();

        $user_id = 'jason';
        $username = 'jasutoji';

        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['is_logged_in'] = true;

        echo 'berhasil tercatat di server';
    
    
    
    ?>
</body>
</html>