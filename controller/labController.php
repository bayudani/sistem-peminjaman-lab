<?php
require './config/koneksi.php';
// require './model/userModel.php';
require './model/labModel.php';
// require './model/jadwalModel.php';


class labController
{
    // private $userModel;
    private $labModel;
    // private $jadwalModel;

    public function __construct()
    {
        global $koneksi;
        // $this->userModel = new user($koneksi);
        $this->labModel = new lab($koneksi);
        // $this->jadwalModel = new jadwal($koneksi);
    }

    public function getAllLaboran()
    {
        return $this->labModel->getAllLaboran();
    }
    public function addLab()
    {
        if (isset($_POST['name']) && isset($_POST['laboran_id']) && isset($_POST['id_lab']) && isset($_POST['deskripsi'])) {
            $name = $_POST['name'];
            $laboran_id = $_POST['laboran_id'];
            $id_lab = $_POST['id_lab'];
            $deskripsi = $_POST['deskripsi'];

            if ($this->labModel->addLab($name, $laboran_id, $id_lab, $deskripsi)) {
                // echo "Lab berhasil ditambahkan";
                header("location:lab");
            } else {
                echo "Gagal menambahkan lab";
            }
        }
    }
    public function getAllLab()
    {
        return $this->labModel->getAllLab();
    }
    public function getLabCount()
    {
        return $this->labModel->countLab();
    }
    

    
}
