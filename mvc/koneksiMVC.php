<?php

// sesuaikan username dan password database Anda
$mysqli = new mysqli('localhost', 'root', 'Arfasya_2205', 'praktikumWeb');

// Cek koneksi
if ($mysqli->connect_errno) {
    die("Gagal menghubungkan ke MySQL: " . $mysqli->connect_error);
}
