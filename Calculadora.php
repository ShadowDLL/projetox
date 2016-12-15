<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculadora
 *
 * @author ORLANDO N
 */
class Calculadora 
{   
    //put your code here
    private $numInicial;
    
    public function __construct($numeroInicial)
    {
        $this->numInicial = $numeroInicial;
    }

    
    public function Somar($n1)
    {
       $this->numInicial += $n1;
       return $this;//Retorna o próprio objeto
    }
    public function Subtrair($n1)
    {
       $this->numInicial -= $n1;
       return $this;//Retorna o próprio objeto;
    }
    public function Multiplicar($n1)
    {
       $this->numInicial *= $n1;
       return $this;//Retorna o próprio objeto
    }
    public function Dividir($n1)
    {
       $this->numInicial /= $n1;
       return $this;//Retorna o próprio objeto
    }
    public function Resultado()
    {
        return $this->numInicial;
    }
    
}

$calc = new Calculadora(10);

$calc->Somar(2)->Subtrair(3)->Multiplicar(5)->Dividir(2);//Executar metodos recursivos vários ao mesmo tempo
$resultado = $calc->Resultado();//22,5
echo "O resultado é: ".$resultado;



