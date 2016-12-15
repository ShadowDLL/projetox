<?php
class Usuarios
{
    private $db;
    public function __construct()
    {
        try
        {
            $this->db = new PDO("mysql:dbname=blog;host=127.0.0.1", "root", "");
        } catch (Exception $ex) {
            echo "Falhou a conexão ",$ex->getMessage();
        }       
    }
        public function Select($id, $email)
    {
          $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id AND email = :email");//:apelido
          //primeira das quatro maneiras atribrui
          $sql->bindValue(":id", $id);//atribui o valor que veio do parametro
          $sql->bindValue(":email", $email);
          $sql->execute();
        $array = array();
        if($sql->rowCount() > 0)
        {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function Inserir($nome, $email, $senha)
    {
        $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
        //na segunda maneira associa se mudar o valor da variavel antes de executar o valor muda
        $nome = addslashes($nome);
        $email = addslashes($email);
        $senha = addslashes(md5($senha));
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", $senha);
        //exemplo no parametro nome pode vir qualquer informação caso eu altere dentro deste método 
        //como vou fazer agora a última informação é a que vale
        $nome = "Antônio";
        //independente do valor que vier do parametro nome ex Orlando o que será inserido é Antônio
        $sql->execute();  
        echo "Registro inserido";
    }
    public function Alterar($nome, $email, $senha, $id)
    {
        //Terceira forma utilizando ?
        $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $sql->execute(array($nome, $email, md5($senha), $id));
        echo "Registro atualizado";
    }
    public function Excluir($id, $email)
    {
        //Quarta forma usando o bind
        $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ? AND email = ?");
        $sql->bindValue(1, $id);//atribui a primeira ?
        $sql->bindValue(2, $email);//atribui a segunda ?
        $sql->execute();
        echo "Registro excluido ";              
    }
    
}
