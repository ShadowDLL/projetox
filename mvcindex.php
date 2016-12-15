<?php
require 'configure.php';//Arquivo de banco de dados
//Definir o auto load para as classes
spl_autoload_register(function($class){
    if(strpos($class, 'Controller') > -1)//Verifica se possui a palavra Controller a partir do array Zero da string
    {
        if(file_exists('controllers/'.$class.'.php'))
        {
            require_once ('controllers/'.$class.'.php');
        }
    }
    elseif(file_exists('models/'.$class.'.php'))
    {
        require_once ('models/'.$class.'.php');
    }
    else
    {
        require_once ('core/'.$class.'.php');
    }
});

$core = new Core();
$core->run();


