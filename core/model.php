<?php

class model
{
    public $db;
    public function __construct()
    {
        global $configure;//Chama a variável global
        $this->db = new PDO('mysql:dbname=blog;host=127.0.0.1', 'root','');
    }
}

