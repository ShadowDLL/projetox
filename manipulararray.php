<?php

$array = array('nome'=>'orlando', 'idade'=>37,'cidade'=>'sao paulo','pais'=>'brasil');
$array2 = array_keys($array);
print_r($array2);
echo "</br>";
$array2 = array_values($array);
print_r($array2);
echo "</br>";
array_pop($array);
print_r($array);
echo "</br>";
array_shift($array);
print_r($array);
echo "</br>";
asort($array);
print_r($array);
echo "</br>";
arsort($array);
print_r($array);
echo "</br>";
echo "a quantidade de elementos do array e: ".count($array);
echo "</br>";
$vencedores = array ('orlando', 'sara', 'juliano', 'jose');
if (in_array("sara",$vencedores)) {
    echo "venceu";
}




