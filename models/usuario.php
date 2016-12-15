<?php
class Usuario extends model
{
    private $nome;
    function getNome()
    {
        return $this->nome;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
}
