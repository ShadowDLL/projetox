<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of post
 *
 * @author ORLANDO N
 */
class post {
    //put your code here
    private $titulo;
    private $data;
    private $corpo;
    private $comentario;
    public $postagem = "Nova Postagem";
    
    public function __construct($titulo)
    {
        $this->setTitulo($titulo);
        echo $this->titulo."<br/>";
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        if(is_string($titulo))
        {
            $this->titulo = $titulo;
        }
    }
    public function addComentario($msg)
    {
        $this->comentario[] = $msg; //Adiciona uma elemento no Array comentario porque não colocou na da nos colchetes
        $this->quantidadePostagens();
        
    }
    public function quantidadePostagens()
    {
        echo count($this->comentario);
    }
}

