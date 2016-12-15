<?php
/*
 * Cache da página inteira
 * Evitar processamento caso exista
 */
/*
if(file_exists("pagina.cache"))
{
    require "pagina.cache";
}
 else 
 {
    ob_start();//Tudo que for pra ser impresso na tela não vai aparecer até o ob_end_clean(), será guardado na memória;
    require 'cacheintermediariopagina.php';
    $html = ob_get_contents();//Salva o que foi impresso na tela na variavel $html

    ob_end_clean();//A partir daqui serão exibidos na tela
    file_put_contents("pagina.cache", $html);
    //caso queira mostrar
    echo $html;
 }
 * 
 */
 




