    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Calculator</title>
    </head>
    <body>
        <h3>Nama: Muhammad Arfasya Respati Priyadi</h3>
        <h3>NIM: 255150700111041</h3>
        <form method="POST">
            <label> angka ke - 1:
                <input type="number" name="number1" placeholder="insert angka pertama"> <br>
            </label> <br>

            <label> angka ke - 2:
                <input type="number" name="number2" placeholder="insert angka kedua"> <br>
            </label> <br> <br>

            <label> +
                <input type="radio" name="operation" value="+"> 
            </label>
            <label> -
                <input type="radio" name="operation" value ="-">
            </label>
            <label> *
                <input type="radio" name="operation" value ="*">
            </label>
            <label> /
                <input type="radio" name="operation" value ="/">
            </label>
            <button type="submit" name="hitung">submit</button>
        </form>
    <?php
        if (isset($_POST['hitung'])) {
            $a = $_POST['number1'];
            $b = $_POST['number2'];
            $op = $_POST['operation'] ?? '';

            if ($op == '+') {
                $hasil = $a + $b;
            } elseif ($op == '-') {
                $hasil = $a - $b;
            } elseif ($op == '*') {
                $hasil = $a * $b;
            } elseif ($op == '/') {
                $hasil = $b != 0 ? $a / $b : "Tidak bisa dibagi 0";
            } else {
                $hasil = "Pilih operasi dulu!";
            }

            echo "<h3>Hasil: " . $hasil . "</h3>";
        }
        ?>
    </body>
    </html>