<?php

class user{
    private $koneksi;
    // private $table = 'user';

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllUser()
    {
        $query = "SELECT * FROM user";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function getAllLaboran()
    {
        $query = "SELECT * FROM user WHERE role = 'laboran'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
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

    public function registerLaboran($email, $username, $password)
    {
        $role = 'laboran';
        $stmt = $this->koneksi->prepare("INSERT INTO user (nim,username,password,role) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $email, $username, $password,$role);
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
    
    public function countuser() {
        $query = "SELECT COUNT(*) AS total_user FROM user";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array
            return $row['total_user']; // Return the total user count
        }
        return 0; // Return 0 if query fails
    }
    public function countLaboran() {
        $query = "SELECT COUNT(*) AS total_laboran FROM user WHERE role ='laboran'";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array
            return $row['total_laboran']; // Return the total user count
        }
        return 0; // Return 0 if query fails
    }
    
}

?>