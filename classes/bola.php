<?php

//Auto Load conceito para carregar várias classes ao mesmo tempo
//1º Forma

 class bola
{
    private $cor;
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getCor()
    {
        return $this->cor; 
    }
}

