<?php

$arquivo = "imagem.png";
$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);
$ratio = $largura_original / $altura_original;
//print_r($ratio);
//echo '</br>';
if($largura/$altura > $ratio)
{
    $largura = $altura * $ratio;
}
else
{
    $altura = $largura/$ratio;
}
//echo 'largura original: '.$largura_original.'</br>';
//echo 'altura original: '.$altura_original.'</br>';
//echo 'largura: '.$largura.'</br>';
//echo 'altura: '.$altura.'</br>';

$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefrompng($arquivo);
imagecopyresampled($imagem_final, $imagem_original,0,0,0,0,$largura, $altura,$largura_original,$altura_original);
//Mostrar a imagem na tela
//header("Content-Type: image/png"); //transforma o arquivo em imagem para que seja exibida na tela
//imagepng($imagem_final, null);
//Caso queira salvar a imagem no servidor comente ou remova a linha header e imagepng acima
imagepng($imagem_final, "arquivos/hulk.png");
echo "imagem redimensionada com sucesso!";


