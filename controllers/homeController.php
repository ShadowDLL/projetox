<?php

class homeController extends controller
{
    public function index()//Primeiro método ao ser chamado o HomeController mas pode usar o nome que quiser
    {
//        $usuario = new Usuario();
//        $usuario->setNome("Orlandoxxxxcccc");
//        
//        $dados = array(
//            'name' => $usuario->getNome()
//        );
//        
//        $this->loadTemplate('home', $dados);
        $fotos = new fotos();
        $dados['fotos'] = $fotos->getFotos();
        
        $this->loadTemplate('home', $dados);
    }
    public function Sobre ()
    {
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }
}

