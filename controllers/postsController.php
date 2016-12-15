<?php

class postsController extends controller
{
    public function index()
    {
        echo "Listas das postagens";
    }
    public function ver($nome, $sobrenome)
    {
        echo "Meu nome e: ".$nome." ".$sobrenome;
    }
}

