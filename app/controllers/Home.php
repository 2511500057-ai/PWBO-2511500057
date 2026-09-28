<?php

class Home extends Controller {
    public function index()
    {
        $this->view('home/index'); //memanggil file yang ada di dalam folder views lalu ke folder home dan nama file index.php
    }
}