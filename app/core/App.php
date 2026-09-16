<?php

class App {
    protected $controller = 'Home'; //controller default
    protected $method = 'index'; //method default 
    protected $params = []; //parameter default

    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($_GET);

    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url dari karakter aneh
            $url = explode('/', $url);
            return $url;
        }
    }
}