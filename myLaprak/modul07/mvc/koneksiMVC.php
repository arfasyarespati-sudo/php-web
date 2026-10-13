<?php
$mysqli = new mysqli('localhost', 'root', 'Arfasya_2205', 'praktikumWeb');


if ($mysqli->connect_errno) {
    die("Gagal menghubungkan ke MySQL: " . $mysqli->connect_error);
}
