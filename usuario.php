<?php

class Usuario
{
    //Atributos
    private $id;
    private $email;
    private $senha;
    private $nome;
    //Variáveis
    private $pdo;
    //Construtor
    public function __construct($id = null)
    {
          try
          {
              $this->pdo = new PDO("mysql:dbname=usuarios;host=127.0.0.1", "root", "");
          } catch (PDOException $ex) {
              echo "Falhou a conexão ".$ex->getMessage();
          }
        if(!empty($id))
        {
          $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
          $sql->execute(array($id));
          
          if($sql->rowCount() > 0)
          {
              $data = $sql->fetch();
              $this->id = $data["id"];
              $this->email = $data["email"];
              $this->senha = $data["senha"];
              $this->nome = $data["nome"];
          }
        }
    }
    //Métodos
    public function getId()
    {
        return $this->id;
    } 
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = md5($senha);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function Salvar()
    {
        if(!empty($this->id))
        {
            $sql = $this->pdo->prepare("UPDATE usuarios SET email = ?, senha = ?, nome = ? WHERE id = ?");
            $sql->execute(array($this->email, $this->senha, $this->nome, $this->id));
        }
        else
        {
            $sql = $this->pdo->prepare("INSERT INTO usuarios SET email = ?, senha = ?, nome = ?");
            $sql->execute(array($this->email, $this->senha, $this->nome));
        }
    }
    public function Excluir()
    {
        if(!empty($this->id))
        {
            $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
            $sql->execute(array($this->id));
        }
    }
    
    
}

