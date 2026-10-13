<!DOCTYPE html>
<html>
<head>
    <title>Halaman Administrasi - Program Kerja BEM</title>
</head>
<body>
    <h2>Halaman Administrasi - Program Kerja BEM</h2>
    <p>
        Selamat Datang: <b><?= htmlspecialchars($pengurus->nama) ?></b> | 
        Jabatan: <b><?= htmlspecialchars($pengurus->getJabatan()) ?></b> | 
        <a href="index.php?action=logout">Logout</a>
    </p>

    <h3>Daftar Program Kerja</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Program Kerja</th>
            <th>Surat Keterangan</th>
            <?php if ($pengurus->canManageProker()) { ?>
                <th>Aksi</th>
            <?php } ?>
        </tr>
        <?php while ($row = $proker->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['nomorProgram']) ?></td>
            <td><?= htmlspecialchars($row['namaProgram']) ?></td>
            <td><?= htmlspecialchars($row['suratKeterangan']) ?></td>
            <?php if ($pengurus->canManageProker()) { ?>
            <td>
                <a href="index.php?editNomor=<?= urlencode($row['nomorProgram']) ?>">Edit</a> | 
                <a href="index.php?action=hapus&nomor=<?= urlencode($row['nomorProgram']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>

    <?php if ($pengurus->canManageProker()) { ?>
        <br>
        <h3><?= $editData ? 'Edit Program Kerja' : 'Tambah Program Kerja' ?></h3>
        <form action="index.php?action=<?= $editData ? 'edit' : 'tambah' ?>" method="post">
            Nomor Program:<br>
            <input type="number" name="nomor" value="<?= $editData['nomorProgram'] ?? '' ?>" <?= $editData ? 'readonly' : 'required' ?>><br><br>

            Nama Program:<br>
            <input type="text" name="nama" value="<?= $editData['namaProgram'] ?? '' ?>" required><br><br>

            Surat Keterangan:<br>
            <input type="text" name="surat" value="<?= $editData['suratKeterangan'] ?? '' ?>" required><br><br>

            <input type="submit" value="<?= $editData ? 'Update' : 'Simpan' ?>">
            <?php if ($editData) { ?>
                <a href="index.php">Batal</a>
            <?php } ?>
        </form>
    <?php } else { ?>
        <p><i>*Catatan Hak Akses: Anda login sebagai <b>Menteri</b> (Hanya diizinkan untuk melihat daftar program kerja).</i></p>
    <?php } ?>
</body>
</html>
