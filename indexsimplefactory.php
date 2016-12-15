<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'simplefactory.php';

$fb = new facebook();
$post = $fb->createPosts();
$post->setAuthor('Orlando');
$post->setMessage('Author da Postagem');
echo "Author e: ".$post->getAuthor()."<br/>";
echo "Mensagem do Post e: ".$post->getMessage();

