<?php

interface Animal
{
    public function Andar();//Não pode implementar os métodos
    
}
class Cachorro implements Animal
{
    public function Andar()
    {
        echo "Estou andando...";
    }
}
$cachorro = new Cachorro();
$cachorro->Andar();

