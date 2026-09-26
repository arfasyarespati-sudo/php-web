<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$databaseHost     = $_ENV['DB_HOST'];
$databaseName     = $_ENV['DB_NAME'];
$databaseUsername = $_ENV['DB_USERNAME'];
$databasePassword = $_ENV['DB_PASSWORD'];

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>