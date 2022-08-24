<?php

class Siswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['ssa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nis)
    {
        $data['judul'] = 'Detail Siswa';
        $data['ssa'] = $this->model('Siswa_model')->getSiswaById($nis);      
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'succes');
            header('Location: ' . BASEURL . '/siswa');
            exit;   
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'succes');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function hapus($nis)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($nis) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'succes');
            header('Location: ' . BASEURL . '/siswa');
            exit;   
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
    
    public function getubah()
    {
         echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Siswa_model')->ubahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    // public function cari()
    // {
    //     $data['judul'] = 'Daftar Mahasiswa';
    //     $data['mhs']   = $this->model('Mahasiswa_model')->cariDataMahasiswa();
    //     $this->view('templates/header', $data);
    //     $this->view('mahasiswa/index', $data);
    //     $this->view('templates/footer');
    // }  
}
