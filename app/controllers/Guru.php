<?php

class Guru extends Controller {
    public function index()
    {
        $data['judul'] = 'Guru';
        $data['gur'] = $this->model('Guru_model')->getAllKomli();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nama)
    {
        $data['judul'] = 'Detail Guru';
        $data['gur'] = $this->model('Guru_model')->getKomliById($nama);      
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Guru_model')->tambahDataKomli($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'succes');
            header('Location: ' . BASEURL . '/guru');
            exit;   
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }
    public function hapus($nama)
    {
        if( $this->model('Guru_model')->hapusDataKomli($nama) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'succes');
            header('Location: ' . BASEURL . '/guru');
            exit;   
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

}
