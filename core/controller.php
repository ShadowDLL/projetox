<?php

class controller
{
    public function loadView($viewName, $viewData = array())
    {
        extract ($viewData);//Transforma cada item do array em variáveis separadas
        //ex: $viewData = array('nome => "Orlando", 'idade' => 90') vai ficar
        //$nome = "Orlando";
        //$idade = 90;
        include 'views/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array())
    {
        include 'views/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData= array())
    {
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }
}

