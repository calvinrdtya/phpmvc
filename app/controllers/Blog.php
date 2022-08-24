<?php 
class Blog extends Controller {

        public function index()
        {
           $data['judul'] = 'Blog';
        //    $data['nama'] = $this->model('User_model')->getUser();
           $this->view('templates/header', $data);
           $this->view('blog/index', $data);
           $this->view('templates/footer');
        }
}