<?php

class Post{
    public function __construct()
    {
        echo "I am constructur of ".__CLASS__. " class <br>";
    }
    public function index()
    {
        echo "I am index of ".__CLASS__. " class <br>";
    }
    public function show($data = [])
    {
        echo "I am show of ".__CLASS__. " class <br>";
        echo "<pre>".print_r($data,true)."</pre>";
    }
}