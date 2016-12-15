<?php
$nomes = array(
    array("nome" =>"orlando", "idade"=>"37"),
    array("nome" =>"sara", "idade"=>"32"),
    array("nome" =>"juliano", "idade"=>"36"),
    array("nome" =>"jose", "idade"=>"42"));

foreach ($nomes as $value) {
    echo " O nome e: ".$value["nome"]." e tenho: ".$value["idade"]." anos"."</br></br>";
}

$aluno = array('nome'=>'orlando','idade'=>37,'estado'=>'sao paulo','pais'=>'brasil');
foreach ($aluno as $chave => $valor)
{
    echo $chave." = ".$valor."</br></br>";
}
