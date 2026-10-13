<?php
require "koneksiMVC.php";

class m_programKerja {
    public function login($nim, $password) {
        global $mysqli;
        $nim = trim($mysqli->real_escape_string($nim));
        $password = trim($mysqli->real_escape_string($password));
        $rs = $mysqli->query("SELECT * FROM pengurus WHERE (nim = '$nim' OR LOWER(jabatan) = LOWER('$nim') OR LOWER(nama) LIKE LOWER('%$nim%')) AND password = '$password'");
        if ($rs && $rs->num_rows > 0) {
            return $rs->fetch_assoc();
        }
        return null;
    }

    public function getSemuaPogramKerja() {
        global $mysqli;
        return $mysqli->query("SELECT * FROM proker");
    }

    public function getPogramKerja($nomor) {
        global $mysqli;
        return $mysqli->query("SELECT * FROM proker WHERE nomorProgram = '$nomor'")->fetch_assoc();
    }

    public function setPogramKerja($nomor, $nama, $surat) {
        global $mysqli;
        return $mysqli->query("INSERT INTO proker VALUES ('$nomor', '$nama', '$surat')");
    }

    public function updatePogramKerja($nomor, $nama, $surat) {
        global $mysqli;
        return $mysqli->query("UPDATE proker SET namaProgram = '$nama', suratKeterangan = '$surat' WHERE nomorProgram = '$nomor'");
    }

    public function deletePogramKerja($nomor) {
        global $mysqli;
        return $mysqli->query("DELETE FROM proker WHERE nomorProgram = '$nomor'");
    }
}
