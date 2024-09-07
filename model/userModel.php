<?php

class user{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function login($username,$password){
        $stmt = $this->koneksi->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }

    public function register($email, $username, $password)
    {
        $stmt = $this->koneksi->prepare("INSERT INTO user (nim,username,password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $email, $username, $password);
        if ($stmt->execute()) {
            // $this->sendVerificationEmail($email, $username, $code_verif);
            return true;
        }
        return false;
    }

    public function isNimRegistered($nim){
        $stmt = $this->koneksi->prepare("SELECT * FROM user WHERE nim=?");
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return $user;
        }
        return false;
    }
}

?>