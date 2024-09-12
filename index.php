<?php
session_start();
// include 'view/user/user.php';

require_once './controller/useController.php';

// $controller = new UserController();

$action = isset($_GET['action']) ? $_GET['action']:'';

switch ($action){
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
    case 'labtes':
        // $controller->logout();
        include './view/user/labtes.php';
        break;
    default:
        include './view/user/user.php';
        break;
}
?>
