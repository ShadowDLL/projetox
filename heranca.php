<?php
abstract class Animal
{
    public $nome = "bichano";
    private $idade;
    abstract protected function Andar();//Ao criar o método Abstrado obrigatóriamente a classe tem que ser 
    //abstrata e as classes que estenderem tem que declarar esse método;
}
class Cavalo extends Animal
{
    private $quantidadePatas;
    private $tipoPelo;
    public function Andar()
    {
        
    }
}
class Gato extends Animal
{
        private $quantidadePatas;
        private $miado;
    public function Andar()
    {
        
    }
}

$cavalo = new Cavalo();


echo $cavalo->nome;