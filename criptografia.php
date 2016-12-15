<?php

$nome = 'orlando';
$nomecriptografado = md5($nome);//irreversivel
echo $nomecriptografado;
echo"</br>";
$nome2 = "juliano";

echo base64_encode($nome);//reversivel
echo"</br>";
echo base64_decode("b3JsYW5kbw==");

