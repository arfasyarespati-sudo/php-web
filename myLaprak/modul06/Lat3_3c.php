<?php
session_start();

if (isset($_SESSION['data_faktorial'])) {
    $data = $_SESSION['data_faktorial'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Data Session</title>
</head>
<body>
    <h2>Data yang Tersimpan dalam Session</h2>
    
    <table border="1" cellpadding="10">
        <tr>
            <td><strong>Angka</strong></td>
            <td><?php echo $data['angka']; ?></td>
        </tr>
        <tr>
            <td><strong>Hasil Faktorial</strong></td>
            <td><?php echo $data['faktorial']; ?></td>
        </tr>
        <tr>
            <td><strong>NIM</strong></td>
            <td><?php echo $data['nim']; ?></td>
        </tr>
        <tr>
            <td><strong>Nama</strong></td>
            <td><?php echo $data['nama']; ?></td>
        </tr>
    </table>
    
    <br>
    <a href="Lat3_3d.php">Hapus Session</a>
    
<?php
} else {
    echo "Tidak ada data dalam session";
}
?>

</body>
</html>