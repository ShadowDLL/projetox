<?php

$nome = "orlando correia do nascimento"."</br>";
$x = explode(" ", $nome);
print_r ($x);

$nomeCompleto = array ('orlando', 'correia','do','nascimento'."</br>");
$y = implode("_", $nomeCompleto);
echo $y;

$n = number_format(444444.556567655665,2,",",".");
echo $n;
echo "</br>";
$frase = 'o rato roeu a roupa';
$h = str_replace("roeu","comeu", $frase);
echo $h;
echo "</br>";
$h = substr($h,2,5);
echo $h;
echo "</br>";
echo ucfirst($nome);
echo ucwords($nome);

