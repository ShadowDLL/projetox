<?php
// O padrão é usar o require ou include
//Com o Auto Load conceito para carregar várias classes ao mesmo tempo
//1º Forma
//function __autoload($class)
//{
//    include_once($class.'.class.php');
//}
//
//2º forma(RECOMENDADO)
spl_autoload_register(function($class)
{
    if(file_exists('classes/'.$class.'.php'))
    {
        require_once('classes/'.$class.'.php');
    }
}
);

$obj = new bola(); 
$obj->setCor("Azul");
echo "A cor da bola e: ".$obj->getCor();
echo "<hr/>";
$obj = new bicicleta(); 
$obj->setCor("Vermelha");
echo "A cor da bicicleta e: ".$obj->getCor();
echo "<hr/>";
$obj = new robo(); 
$obj->setCor("Verde");
echo "A cor do robo e: ".$obj->getCor();

