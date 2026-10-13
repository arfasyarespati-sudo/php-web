<?php

// Class Induk Pengurus BEM (Latihan 1 & 2)
class pengurusBEM {
    public $nim;
    public $nama;
    public $angkatan;
    protected $jabatan;

    public function __construct($nim, $nama, $angkatan, $jabatan) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->angkatan = $angkatan;
        $this->jabatan = $jabatan;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    public function canManageProker() {
        return false;
    }
}

// Subclass Menteri: Hanya melihat proker (Read Only)
class menteri extends pengurusBEM {
    public function canManageProker() {
        return false;
    }
}

// Subclass Kepala Departemen: Boleh mengelola proker (CRUD Lengkap)
class kepalaDepartemen extends pengurusBEM {
    public function canManageProker() {
        return true;
    }
}
