<?php
class Core
{   
    public function run()
    {
        //Pegar a url que o usuário digitou
        //$url = substr($_SERVER['PHP_SELF'], 13); //Variável Global para pegar a url digitada pelo usuário, o 13 é pra pular o /mvcindex.php caso seja index.php colocar 10 
        $url = explode("mvcindex.php", $_SERVER['PHP_SELF']);
        $url = end($url);
        $params = array();
        if(!empty($url))
        {    
            $url = explode('/', $url);//Cria um array dividindo pelas barras 
            array_shift($url);//Retira a primeira chave do array
            $currentController = $url[0].'Controller';//Pegou o controle que sempre será o primeiro parametro
            array_shift($url);//Retirou o controle do array
            if(isset($url[0]))
            {
                $currentAction = $url[0];//Pegou a ação do array
                array_shift($url);//Retirou a ação  do array
            }
            else
            {
                $currentAction = 'index';
            }
            //O que sobrou no array caso exista são somente os parâmetros
            if(count($url) > 0)
            {
                $params = $url;
            }
       }
        else
        {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        require_once 'core/controller.php'; //Não vai instaciar essa classe somente herdar
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
        
        
        
    }
}

