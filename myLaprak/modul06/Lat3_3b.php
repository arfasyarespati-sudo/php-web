<?php
session_start();

function hitungFaktorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * hitungFaktorial($n - 1);
    }
}

$angka = $_POST['angka'];

$hasil_faktorial = hitungFaktorial($angka);

$data_array = array(
    "angka" => $angka,
    "faktorial" => $hasil_faktorial,
    "nim" => "255150700111041",  
    "nama" => "Muhammad Arfasya RP"  
);

$_SESSION['data_faktorial'] = $data_array;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hasil Faktorial</title>
</head>
<body>
    <h2>Hasil Perhitungan Faktorial</h2>
    
    <p><strong>Angka yang dimasukkan:</strong> <?php echo $angka; ?></p>
    <p><strong>Nilai Faktorial:</strong> <?php echo $hasil_faktorial; ?></p>
    
    <p><?php echo $angka; ?>! = <?php echo $hasil_faktorial; ?></p>
    
    <br>
    <a href="Lat3_3c.php">Lihat Data Session</a>
</body>
</html>