<?php

class About extends Controller {
    public function index($nama = 'Dono', $pekerjaan = 'Pelawak')
    {
        $this->view('about/index');
    }

    public function page()
    {
        $this->view('about/page');;
    }
}