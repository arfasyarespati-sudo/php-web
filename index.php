<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Welcome to Pubg mobile</h1>
    <br>
    <form method="POST">
        <label>Name:</label>
            <input type="text" name="name" placeholder="enter a name">
        <br>
        <label>Age:</label>
            <input type="number" name="age" placeholder= "enter an age"> 
        <br>
            <button type="submit">Submit</button>
    </form>
    <?php
    $a = 'hello';
    $b = 'there';


     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['name'];
        $age = $_POST['age'];

        echo "username: ", $username, "<br>";
        echo "age: ", $age, "<br>";
    }

    echo $a, " ", $b, "<br><br>";

    $cars = array('mercedes', 'mitsubishi', 'ferrari');
    foreach ($cars as $c){
        echo "$c <br>";
    }
    echo "<br>";
    $arr2 = array('123'=>'mahasiswa1','456'=>'mahasiswa2','789'=>"mahasiswa3");
    foreach ($arr2 as $m) {
        echo "$m <br>";
    }
   
    ?>
</body>
</html>

