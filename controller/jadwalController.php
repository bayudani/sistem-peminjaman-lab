<?php
require './config/koneksi.php';
// require './model/userModel.php';
// require './model/labModel.php';
require './model/jadwalModel.php';


class jadwalController
{
    private $jadwalModel;
    public function __construct()
    {
        global $koneksi;
        $this->jadwalModel = new jadwal($koneksi);
    }

    public function buatJadwal($id_lab)
    {
        $mulai = new DateTime('08:00');
        $selesai = new DateTime('21:00');

        while ($mulai < $selesai) {
            $waktu_mulai = $mulai->format('H:i:s');
            $mulai->add(new DateInterval('PT1H')); //menambah waktu 1 jam
            $waktu_selesai = $mulai->format('H:i:s');
            $status = 'kosong'; // Default status

            // Simpan jadwal ke database
            $this->jadwalModel->tambahJadwal($id_lab, $waktu_mulai, $waktu_selesai, $status);
        }

        // $_SESSION['berhasil'] = 'Jadwal berhasil dibuat';
        // header('Location: jadwal.php');
    }

    public function getAllJadwal()
    {
        $jadwal = $this->jadwalModel->getAllJadwal(); // Ambil semua jadwal dari model
        return $jadwal;
    }
    public function deleteJadwal($id_jadwal)
    {
        $this->jadwalModel->deleteJadwal($id_jadwal);
        $_SESSION['berhasil'] = 'Jadwal berhasil dihapus';
        header("Location:jadwal");
        exit();
    }
    public function getLabEmtpy()
    {
        return $this->jadwalModel->countLabEmpty();
    }
}
