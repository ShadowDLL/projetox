<?php

/* 
 * Criar um Json
 */
$json= array(
        "nome" => "Orlando",
        "idade" => 37,
        "email" => "orlandocorreia2@hotmail.com"
    );
$obj = new stdClass();
$json = json_encode($json);
echo $json;
print_r($json);
echo "<br/>";
$json = json_decode($json);
echo "Meu nome é: ". $json->nome;


