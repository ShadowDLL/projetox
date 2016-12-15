<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Posts extends model
{
    public function getPosts($limite = 0)
    {
        $array = array();
        $sql = "SELECT * FROM posts LIMIT ".$limite;
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0)
        {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}

