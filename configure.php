<?php

require 'environment.php';
define("BASE_URL", "http://projetox.pc:81/"); //Constante

global $configure;//Será utilizado em outras partes do sistema
$configure = array();

if('ENVIRONMENT' == 'development')
{
    $configure['dbname'] = 'blog';
    $configure['host']   = '127.0.0.1';
    $configure['dbuser'] = 'root';
    $configure['dbpass'] = '';
}
else
{
    $configure['dbname'] = 'blog';
    $configure['host']   = '127.0.0.1';
    $configure['dbuser'] = 'root';
    $configure['dbpass'] = '';
}

