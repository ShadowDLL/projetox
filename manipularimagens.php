<?php

$imagem = "imagem.png";

$hulk = "arquivos/hulk.png";

list($largura_original, $altura_original) = getimagesize($imagem);//carrega uma lista com os 2 parametros que o metodo retorna

list($largura_originalhulk, $altura_originalhulk) = getimagesize($hulk);

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);//Cria uma imagem no php

$imagem_original = imagecreatefrompng($imagem);

$imagem_hulk = imagecreatefrompng($hulk);

imagecopy($imagem_final, $imagem_original, 0,0,0,0, $largura_original, $altura_original);

imagecopy($imagem_final, $imagem_hulk, 150,150,0,0, $largura_originalhulk, $altura_originalhulk);

header("Content-Type: image/png");//Altera o arquivo para o tipo imagem

imagepng($imagem_final, null);//Exibe na tela







