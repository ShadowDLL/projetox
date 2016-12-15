<?php

/* 
 * Padrão Adapter
 * É uma estensão de um objeto(Classe)
 * 
 */

//Classe Pessoa comum
class pessoa
{
    private $nome;
    private $idade;
public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
}
//Adapter da classe pessoa(extensão)
class pessoaAdapter
{
    private $sexo;
    private $pessoa;
    public function __construct(pessoa $pessoa)
    {
        $this->pessoa = $pessoa; 
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getNome()
    {
        return $this->pessoa->getNome();
    }
    public function getIdade()
    {
        return $this->pessoa->getIdade();
    }
}

$pessoa = new pessoa("ORLANDO ", 37);
$pessoaAdapter = new pessoaAdapter($pessoa);
$pessoaAdapter->setSexo("Masculino");

echo "Nome: ".$pessoaAdapter->getNome().'<br/>';
echo "Idade: ".$pessoaAdapter->getIdade().'<br/>';
echo "Sexo ".$pessoaAdapter->getSexo().'<br/>';




