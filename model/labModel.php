<?php

class lab
{
    private $koneksi;
    private $table = 'lab';

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function addLab($name, $laboran_id, $id_lab, $deskripsi)
    {
        $query = 'INSERT INTO ' . $this->table . '(nama_lab,id_laboran,id_lab,deskripsi) VALUES (?,?,?,?)';
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param('siis', $name, $laboran_id, $id_lab, $deskripsi);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Function untuk mendapatkan daftar laboran
    public function getAllLaboran()
    {
        $query = "SELECT * FROM user WHERE role = 'laboran'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function getAllLab()
    {
        $query = "
            SELECT 
                lab.nama_lab, 
                lab.id_laboran, 
                user.username AS nama_laboran,
                user.nim AS nim_laboran,
                user.password AS password,
                lab.id_lab, 
                lab.deskripsi
            FROM 
                " . $this->table . " lab
            JOIN 
                user ON lab.id_laboran = user.id_user
        ";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function countLab()
    {
        $query = "SELECT COUNT(*) AS total_lab FROM lab";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array
            return $row['total_lab']; // Return the total user count
        }
        return 0; // Return 0 if query fails
    }


}
