<?php
session_start();
include_once("m_programKerja.php");
include_once("pengurusBEM.php");

class c_programKerja {
    public $model;

    public function __construct() {
        $this->model = new m_programKerja();
    }

    public function invoke() {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        // 1. PROSES LOGIN
        if ($action == 'login') {
            $user = $this->model->login($_POST['nim'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
            } else {
                $_SESSION['error'] = "NIM atau Password salah!";
            }
            header("Location: index.php");
            exit();
        }

        // 2. PROSES LOGOUT
        if ($action == 'logout') {
            session_destroy();
            header("Location: index.php");
            exit();
        }

        // 3. JIKA BELUM LOGIN, ARAHKAN KE VIEW LOGIN
        if (!isset($_SESSION['user'])) {
            include 'v_login.php';
            exit();
        }

        // 4. INSTANSIASI OBJEK OOP BERDASARKAN JABATAN (INTEGRASI LATIHAN 2)
        $userData = $_SESSION['user'];
        if ($userData['jabatan'] == 'Menteri') {
            $pengurus = new menteri($userData['nim'], $userData['nama'], $userData['angkatan'], $userData['jabatan']);
        } else {
            $pengurus = new kepalaDepartemen($userData['nim'], $userData['nama'], $userData['angkatan'], $userData['jabatan']);
        }

        // 5. OPERASI CRUD (HANYA DIIZINKAN JIKA canManageProker() BERNILAI TRUE)
        if ($action == 'tambah' && $pengurus->canManageProker()) {
            $this->model->setPogramKerja($_POST['nomor'], $_POST['nama'], $_POST['surat']);
            header("Location: index.php");
            exit();
        } else if ($action == 'edit' && $pengurus->canManageProker()) {
            $this->model->updatePogramKerja($_POST['nomor'], $_POST['nama'], $_POST['surat']);
            header("Location: index.php");
            exit();
        } else if ($action == 'hapus' && $pengurus->canManageProker()) {
            $this->model->deletePogramKerja($_GET['nomor']);
            header("Location: index.php");
            exit();
        }

        // 6. TAMPILKAN DAFTAR PROGRAM KERJA (VIEW)
        $proker = $this->model->getSemuaPogramKerja();
        $editData = (isset($_GET['editNomor']) && $pengurus->canManageProker()) 
            ? $this->model->getPogramKerja($_GET['editNomor']) 
            : null;

        include 'v_programKerja.php';
    }
}
