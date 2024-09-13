<?php

class jadwal
{
    private $koneksi;
    private $table = 'lab';

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function tambahJadwal($id_lab, $waktu_mulai, $waktu_selesai, $status)
    {
        $stmt = $this->koneksi->prepare("INSERT INTO jadwal_lab (id_lab, waktu_mulai, waktu_selesai, status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $id_lab, $waktu_mulai, $waktu_selesai, $status);
        return $stmt->execute();
    }
    public function getJadwalByLab($id_lab)
    {
        // Mengambil data nama_lab, waktu_mulai, dan waktu_selesai dari tabel lab dan jadwal_lab
        $query = "
        SELECT lab.nama_lab, jadwal_lab.waktu_mulai, jadwal_lab.waktu_selesai 
        FROM jadwal_lab 
        JOIN lab ON jadwal_lab.id_lab = lab.id_lab 
        WHERE jadwal_lab.id_lab = ?
    ";

        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_lab);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC); // Mengembalikan array asosiatif
    }

    public function getAllJadwal()
    {
        $query = "
        SELECT 
        jadwal_lab.id_jadwal,
        lab.nama_lab, 
        jadwal_lab.waktu_mulai, 
        jadwal_lab.waktu_selesai 
        FROM jadwal_lab 
        JOIN lab ON jadwal_lab.id_lab = lab.id_lab
    ";
        $stmt = $this->koneksi->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteJadwal($id_jadwal)
    {
        $stmt = $this->koneksi->prepare("DELETE FROM jadwal_lab WHERE id_jadwal = ?");
        $stmt->bind_param("i", $id_jadwal);
        return $stmt->execute();
    }

    public function countLabEmpty()
    {
        $query = "SELECT COUNT(*) AS total_lab_empty FROM jadwal_lab WHERE status = 'kosong'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array
            return $row['total_lab_empty']; // Return the total user count
        }
        return 0; // Return 0 if query fails
    }
}
