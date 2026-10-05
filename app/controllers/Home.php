<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header');
        $this->view('home/index', $data); //memanggil file yang ada di dalam folder views lalu ke folder home dan nama file index.php
        $this->view('templates/footer');
    }
}