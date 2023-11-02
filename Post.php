<?php
class Post{
    public function __construct()
    {
        echo "I am constructor of ".__CLASS__."class <br>";
    }
    public function index()
    {
        echo "I am index method of ".__CLASS__." class <br>";
    }
    public function show($params = [])
    {
        echo "I am show method of ".__CLASS__." class <br>";
        print_r($params);
    }
}