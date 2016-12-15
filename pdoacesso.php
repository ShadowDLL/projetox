<?php
//PDO Biblioteca de acesso a banco de dados no PHP
$dsn = "mysql:dbname=blog;host=127.0.0.1";//Variável para conexão, parametros: tipo do banco, nome do banco, caminho do banco ou ip
$dbuser = "root";//nome do usuário do banco
$dbpass = "";//senha do usuário do banco

try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);//inicia o objeto PDO
    echo "conectado ao banco"."</br></br>";
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    
    if ($sql->rowCount()>0) {
        echo "Existe usuarios</br></br>"; 
        foreach ($sql->fetchAll() as $usuario)//fetchAll() este método pega todas as informações da consulta e transforma num Array
        {
            echo "Nome: ". $usuario["nome"]." - ".$usuario["email"]."</br></br>";
        }
    }
    else
    {
        echo "Nao ha usuarios cadastrados";
    }
    //Insere um registro
    $nome = "Maria";
    $email = "maria@yahoo.com.br";
    $senha = md5("123");
    $sql = "INSERT INTO usuarios SET nome='".$nome."',email='".$email."',senha='".$senha."'";
    //$pdo->query($sql);
    echo "Usuario inserido: ".$pdo->lastInsertId();//lastInsertId() pega o último id inserido
    //Atualiza um registro
    $sql = "UPDATE usuarios SET email = 'ocnascimento2@hotmail.com' WHERE email = 'ocnascimento2@gmail.com'";
    $pdo->query($sql);
    echo "Usuario alterado com sucesso";
    //Exclui o registro
    $sql = "DELETE FROM usuarios WHERE id = 6";
    $pdo->query($sql);
    echo "usuario excluido";
} catch (PDOException $e) {
    echo "erro ao se conectar ao banco".$e->getMessage();
}
