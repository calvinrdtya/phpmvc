<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {   
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($nis)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nis=:nis');
        $this->db->bind('nis', $nis);
        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa
                    VALUES
                    ('', :nama, :jns_kel, :tinggi, :asal_sekolah, :komli, :nilai_un)";

                    $this->db->query($query);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('jns_kel', $data['jns_kel']);
                    $this->db->bind('tinggi', $data['tinggi']);
                    $this->db->bind('asal_sekolah', $data['asal_sekolah']);
                    $this->db->bind('komli', $data['komli']);
                    $this->db->bind('nilai_un', $data['nilai_un']); 

                    $this->db->execute();
                    return $this->db->rowCount();
    }
    public function hapusDataSiswa($nis)
    {
     $query = "DELETE FROM siswa WHERE nis = :nis";
     $this->db->query($query);
     $this->db->bind('nis', $nis);
 
     $this->db->execute();
     return $this->db->rowCount();
    }
    public function ubahDataSiswa($data)
    {
        $query = "UPDATE siswa SET
                    nama    = :nama,
                    nrp     = :nrp,
                    email   = :email,
                    jurusan = :jurusan,
                  WHERE nis  = :nis";
                 

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('nis', $data['nis']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function cariDataSiswa()
    {
        $keyword = $_POST['keyword'];
        $query= "SELECT * FROM siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}