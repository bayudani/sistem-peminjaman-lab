<?php
session_start();
// include 'view/user/user.php';

require_once './controller/useController.php';
require_once './controller/labController.php';
require_once './controller/jadwalController.php';

// $controller = new UserController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'login':
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->login($_POST['username'], $_POST['password']);
        }
        include './view/login.php';
        break;
    case 'register':
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->register($_POST['nim'], $_POST['username'], $_POST['password'], $_POST['repeat_password']);
        }
        include './view/register.php';
        break;
    case 'registerLaboran':
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->registerLaboran($_POST['nim'], $_POST['username'], $_POST['password'], $_POST['repeat_password']);
        }
        include './view/register.php';
        break;
    case 'logout':
        session_destroy();
        header('Location:/peminjamanLab');
        break;
    case 'admin':
        if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== true || ($_SESSION['login']['role'] !== 'admin' && $_SESSION['login']['role'] !== 'admin artikel')) {
            header("Location:login");
            exit();
        }
        $controller = new userController($koneksi);
        $user = $controller->getAllUser();
        $total_user = $controller->getUserCount();
        $total_laboran = $controller->getLaboranCount();
        $controller = new labController($koneksi);
        $total_lab = $controller->getLabCount();
        $controller = new jadwalController($koneksi);
        $lab_empty = $controller->getLabEmtpy();
        include './view/admin/index.php';
        break;
    case 'lab':
        $controller = new userController($koneksi);
        $laboran = $controller->getAllLaboran();
        $controller = new labController($koneksi);
        $total_lab = $controller->getAllLab();
        include './view/admin/lab.php';
        break;
    case 'laboran':
        $controller = new labController($koneksi);
        $laboran = $controller->getAllLaboran();
        include './view/admin/laboran.php';
        break;
    case 'tambahLab':
        $controller = new labController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->addLab();
        }
        break;
    case 'jadwal':
        $controller = new labController($koneksi);
        $labs = $controller->getAllLab();
        $controller = new jadwalController($koneksi);
        $jadwal = $controller->getAllJadwal();
        include './view/admin/jadwal.php';
        break;
    case 'tambahJadwal':
        $controller = new jadwalController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $tanggal = $_POST['tanggal'];
            $id_lab = $_POST['id_lab'];

            $controller->buatJadwal($id_lab);
            $_SESSION['berhasil'] = 'Jadwal telah ditambahkan';
            header("location:jadwal");
            exit();
        } else {
            // tampil form untuk memilih tanggal dan lab
            $controller = new labController($koneksi);
            $labs = $controller->getAllLab();
            include './view/admin/jadwal.php';
        }
        break;
        // case 'editLab':

            // hapus edit jadwal,lab,laboran
    case 'hapusJadwal':
        $id_jadwal = $_GET['id_jadwal'];
        $controller = new jadwalController($koneksi);
        $controller->deleteJadwal($id_jadwal);
        break;
    case 'editJadwal':

    case 'editLab':

    case 'daftarlab':
        include './view/user/lab.php';
        break;
        // case 'daftar produk':
    default:
        include './view/user/user.php';
        break;
}
