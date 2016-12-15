<?php
//Gerar uma sessão
session_start();//inicia uma sessao; salvando as informações enquanto o navegador estiver aberto colocar na primeira linha

$_SESSION["teste"] = "Orlando Nascimento";

echo $_SESSION["teste"]."</br></br>";

//Criar um cookie

//setcookie("meuteste","orlandoc",time()+3600);//chave não pode ter espaços, valor, tempo de expiração

//echo "cookie setado com sucesso"."</br></br>";

//Acessar o cookie

echo "Meu cookie e: ".$_COOKIE["meuteste"];

