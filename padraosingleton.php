<?php

/* 
 * Padrão Singleton
 * É utilizado quando não é permitido ter várias instâncias de um objeto
 */

class pessoa
{
    private $nome;
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    private $idade;
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    //Método para retornar essa instência
    public static function getInstance()
    {
        //Instanciar o objeto dentro do próprio objeto
        static $instance = null;
        //Verifica se já possui alguma instância 
        if($instance === NULL)//Vefificação tripla
        {
            $instance = new pessoa();
        }
        return $instance;
    }
    //Criar o construtor privado para que outras variáveis não acessem
    private function __construct()
    {
        //Se tentar criar fora desta classe o objeto new pessoa ocorrerá um erro pois o construtor é privado
    }
}

$cara = pessoa::getInstance();
$cara->setNome("orlandoxxx");
$cara->setIdade(33);
echo "O nome do objeto cara e: ".$cara->getNome().'<br/>';
echo "A idade do objeto cara e: ".$cara->getIdade().'<br/><br/>';


$fulano = pessoa::getInstance();
$fulano->setNome("Fulandoxxx");
$fulano->setIdade(55);
echo "O nome do fulano e: ".$fulano->getNome().'<br/>';
echo "A idade do fulando e:".$fulano->getIdade().'<br/>';

echo "O nome do objeto cara e: ".$cara->getNome().'<br/>';
echo "A idade do objeto cara e: ".$cara->getIdade().'<br/><br/>';

