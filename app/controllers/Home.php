<?php

class Home extends Controller{
    public function __construct()
    {
        echo "I am constructur of ".__CLASS__. " class <br>";
    }
    public function index()
    {
        $this->view("home/index");
    }
    public function show()
    {
        echo "I am show of ".__CLASS__. " class <br>";
    }
}