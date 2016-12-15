<?php

class Animais
{
    public function getNome()
    {
        echo "getNome da classe animal<br/>";
    }
    public function testar()
    {
        echo "Testando...";
    }
}
class Cachorro extends Animais
{
    public function getNome()
    {
        echo "getNome da classe cachorro<br/>";
        $this->testar();
    }
}

$animal = new Animais();
$cachorro = new Cachorro();
echo $cachorro->getNome();