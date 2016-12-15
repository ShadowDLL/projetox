<?php

/* 
 * Cache
 * Salva o processamento em um arquivo para que possa ser acessado rapidamente
 */

class cache
{
    private $cache;
    public function setVar($nome, $valor)//Nome da variavel a ser criada no cache e o valor
    {
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
    }
    public function getVar($nome)
    {
        $this->readCache();
        return $this->cache->$nome;
    }
    private function readCache()
    {
        $this->cache = new stdClass();//Limpa, Cria um objeto vazio
        if (file_exists("cache.cache"))
        {
            $this->cache = json_decode(file_get_contents("cache.cache"));//file_get_contents Armazena uma string e o Json decode transforma em objeto 
        }
    }
    private function saveCache()
    {
        //Método para salvar informações em um arquivo
        file_put_contents("cache.cache", json_encode($this->cache));
    }
}

$cache = new cache();
//$cache->setVar("idade", 37);

echo "Meu nome e: ".$cache->getVar("nome").' e tenho '.$cache->getVar("idade"). ' anos';

