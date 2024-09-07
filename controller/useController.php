<?php
require './config/koneksi.php';
require './model/userModel.php';
class userController
{
    private $userModel;

    public function __construct()
    {
        global $koneksi;
        $this->userModel = new user($koneksi);
    }

    public function register($nim, $username, $password, $repeat_password)
    {
        if ($this->userModel->isNimRegistered($nim)) {
            $_SESSION['gagal'] = 'NIM sudah terdaftar';
            header("location:register");
            exit();
        }

        if ($password === $repeat_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if ($this->userModel->register($nim, $username, $hashed_password)) {
                $_SESSION['berhasil'] = "Akun anda telah terdaftar";
                $_SESSION['nim'] = $nim;
                header("location:/peminjamanLab");
                exit();
            } else {
                $_SESSION['gagal'] = "Gagal mendaftarkan akun";
                header("location:register");
                exit();
            }
        } else {
            $_SESSION['gagal'] = "Passwordharus sama";
            header("location:register");
            exit();
        }
    }

    public function login($username, $password)
    {
        $user = $this->userModel->login($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['nim'] = $user['nim'];
            $_SESSION['login_status'] = true;
            $_SESSION['login']['role'] = $user['role'];

            // Redirect based on user role
            if ($user['role'] === 'laboran' || $user['role'] === 'admin') {
                header("Location: index.php?action=admin");
            } else {
                header("Location:/peminjamanLab"); // Redirect user to index.php
            }
            exit();
        } else {
            $_SESSION['error'] = 'Username or password incorrect.';
            header("Location:login");
            exit();
        }
    }
}
