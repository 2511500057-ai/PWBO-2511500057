<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('home/index'); //memanggil file yang ada di dalam folder views lalu ke folder home dan nama file index.php
        $this->view('templates/footer');
    }
}