<?php
function is_valido($cache)
{   
    $ultima_modificacao = filemtime($cache);//Verifica a data da ultima modificação
    $tempo_cache = time() - $ultima_modificacao;
    if($tempo_cache > 10)//Caso o cache tenha mais de 10 segundos será ignorado e criado outro no lugar dele
    {
        return false;
    }
    else
    {
        return true;
    }   
}
$p = 'pagina';
if(isset($_GET['p']) && !empty($_GET['p']) && file_exists($_GET['p'].'.php'))
{
    $p = $_GET['p'];
}
if(file_exists("caches/".$p.".cache")  && is_valido("caches/".$p.".cache"))
{ 
    require "caches/".$p.".cache";
}
 else 
 {
    ob_start();//Tudo que for pra ser impresso na tela não vai aparecer até o ob_end_clean(), será guardado na memória;
    require $p.'.php';
    $html = ob_get_contents();//Salva o que foi impresso na tela na variavel $html

    ob_end_clean();//A partir daqui serão exibidos na tela
    
    file_put_contents("caches/".$p.".cache", $html);
    //caso queira mostrar
    echo $html;  
 }
 



