<?php

require "banco.php";
$banco = new banco("blog","127.0.0.1","root", "");

$banco->query("SELECT * FROM posts");

$numero = $banco->getNumRows();

echo "Quantidade de posts= ".$numero."<br/><hr/>";

if($banco->getNumRows() > 0)
{
    foreach($banco->Result() as $post)
    {
    echo "Título do post ".$post["titulo"]."<br/>";
    echo "A data de criação do post ".$post["data_criado"]."<br/>";
    echo "A postagem do post ".$post["corpo"]."<br/>";
    echo "O autor do post ".$post["nome_autor"]."<br/><hr/>";
    
    }
}
 else 
 {
     echo "Não houve resultados ";
 }
 
 //$banco->Insert("posts", array("titulo" => "Postagem Nova", "data_criado" => "2016-01-01 00:00:00", "corpo" => "Texto de hoje noticias", "nome_autor" => "Orlando"));
 
 //$banco->Update("posts", array("titulo" => "Postagem Atualizada", "data_criado" => "2016-11-11 00:00:00", "corpo" => "Texto de hoje noticias atualizadoXXX", "nome_autor" => "Orlando Nascimento"), array("id" => 3), "OR");
 
//$banco->Delete("posts", array("id" => 3, "nome_autor" => "orlando nascimento"));

