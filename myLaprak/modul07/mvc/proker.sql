-- Database: praktikumWeb
CREATE DATABASE IF NOT EXISTS praktikumWeb;
USE praktikumWeb;

-- Tabel 1: pengurus (Untuk Login & Hak Akses)
CREATE TABLE IF NOT EXISTS pengurus (
    nim VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    angkatan INT NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

-- Data Akun Pengurus BEM
INSERT INTO pengurus (nim, nama, angkatan, jabatan, password) VALUES
('1111', 'Menteri BEM', 2022, 'Menteri', '123'),
('2222', 'Kadep BEM', 2023, 'Kepala Departemen', '123')
ON DUPLICATE KEY UPDATE nama=VALUES(nama), jabatan=VALUES(jabatan), password=VALUES(password);

-- Tabel 2: proker (Untuk Program Kerja)
CREATE TABLE IF NOT EXISTS proker (
    nomorProgram INT NOT NULL,
    namaProgram VARCHAR(255) NOT NULL,
    suratKeterangan VARCHAR(100) NOT NULL,
    PRIMARY KEY (nomorProgram)
);

-- Data Program Kerja
INSERT INTO proker (nomorProgram, namaProgram, suratKeterangan) VALUES
(1, 'Seminar Nasional Teknologi Informasi', 'SK-001/BEM/2026'),
(2, 'Pelatihan Web Development Modern', 'SK-002/BEM/2026'),
(3, 'Bakti Sosial Mahasiswa Peduli', 'SK-003/BEM/2026')
ON DUPLICATE KEY UPDATE namaProgram=VALUES(namaProgram), suratKeterangan=VALUES(suratKeterangan);
