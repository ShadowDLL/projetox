<?php
require "Cachorro.php";
require "Classe.php";
require "post.php";
$usu = new usuario();

$usu->trocarSenha("", "");
echo "<br/>";
//Cachorro::latir();//Acessa direto a classe sem instanciar;
$post = new post("Primeiro post");
echo $post->postagem;
echo "<br/>";
$post->setTitulo("carregando o titulo");
echo $post->getTitulo();
echo "<br/>";
$post->addComentario("teste");
$post->addComentario("2teste");
$post->addComentario("3teste");
$post->addComentario("4teste");
$post->addComentario("5teste");
$post->addComentario("5teste");



