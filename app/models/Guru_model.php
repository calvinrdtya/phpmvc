<?php

class Guru_model {
    private $table = 'komli';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKomli()
    {   
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getKomliById($nama)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama=:nama');
        $this->db->bind('nama', $nama);
        return $this->db->single();
        // return $nama['Data'];
    }

    public function tambahDataKomli($data)
    {
        $query = "INSERT INTO komli
                    VALUES
                    ('', :komli, :tgl_berdiri, :nama, :jum_siswa, :akreditasi)";

                    $this->db->query($query);
                    $this->db->bind('komli', $data['komli']);
                    $this->db->bind('tgl_berdiri', $data['tgl_berdiri']);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('jum_siswa', $data['jum_siswa']);
                    $this->db->bind('akreditasi', $data['akreditasi']);

                    $this->db->execute();
                    return $this->db->rowCount();
    }
   
   public function hapusDataKomli($nama)
   {
    $query = "DELETE FROM komli WHERE nama = :nama";
    $this->db->query($query);
    $this->db->bind('nama', $nama);

    $this->db->execute();
    return $this->db->rowCount();
   }

}