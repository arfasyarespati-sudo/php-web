<!DOCTYPE html>
<html>
<head>
    <title>Login Pengurus BEM</title>
</head>
<body>
    <h2>Login Pengurus BEM</h2>
    <?php 
    if (isset($_SESSION['error'])) { 
        echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>"; 
        unset($_SESSION['error']);
    } 
    ?>
    <form action="index.php?action=login" method="post">
        NIM / Username:<br>
        <input type="text" name="nim" required placeholder="Contoh: 1111 atau menteri"><br><br>

        Password:<br>
        <input type="password" name="password" required placeholder="Masukkan Password"><br><br>

        <input type="submit" value="Login">
    </form>

    <br>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Role / Jabatan</th>
            <th>NIM</th>
            <th>Password</th>
            <th>Hak Akses</th>
        </tr>
        <tr>
            <td>Menteri</td>
            <td>1111</td>
            <td>123</td>
            <td>Hanya Melihat (Read Only)</td>
        </tr>
        <tr>
            <td>Kepala Departemen</td>
            <td>2222</td>
            <td>123</td>
            <td>Manajemen Penuh (CRUD Lengkap)</td>
        </tr>
    </table>
</body>
</html>
