<?php

class fotos extends model
{
    public function __construct()
    {
        parent::__construct();//Executa tambem o construtor do model caso não adicione esta linha só executara o construtor desta classe
        
    }
    public function getFotos()
    {
        $array = array();
        $sql = 'SELECT * FROM fotos';
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0)
        {
            $array[] = $sql->fetchAll();
        }
        return $array;
    }
}

