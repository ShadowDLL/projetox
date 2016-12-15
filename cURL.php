<?php

$ch = curl_init(); //Inicia a biblioteca curl para fazer integrações com outro site(WebServices)

curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong"); //Setar a URL

curl_setopt($ch, CURLOPT_POST, 1); //Seta o método de envio do formulario como POST

curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Bonieky&idade=90&sexo=masculino");//O terceiro parâmetro é uma query string
//Retorno da Requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//Seta o retorno como true

$resposta = curl_exec($ch);//Executa o método 

curl_close($ch);//Fecha a conexão

print_r($resposta);

