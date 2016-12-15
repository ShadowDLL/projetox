<?php
class Banco
{
    private $pdo;
    private $numRows;
    public function getNumRows()
    {
        return $this->numRows;
    }
    private $array;
    public function __construct($dbname, $host, $dbuser, $dbpass)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
        } catch (PDOException $ex) {
            echo "Falhou: ".$ex->getMessage();
        }    
    }
    public function query($sql)
    {
        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
        $this->array = $query->fetchAll();
    }
    public function Result()
    {
        return $this->array;
    }
    public function Insert ($tabela, $data)
    {
        try {
            if(!empty($tabela) && (is_array($data) && count($data)>0))
            {
                $sql = "INSERT INTO ".$tabela." SET ";
                $dados = array();
                foreach($data as $chave => $valor)
                {
                    $dados[] = $chave. " = '".addslashes($valor)."'";
                }
                $sql .= implode(", ", $dados);//concatenar todas as strings com uma virgula
                
                echo $sql;
                
                $this->pdo->query($sql);
                echo "<br/>";
                echo "Registro inserido com sucesso";
            }
            
        } catch (Exception $ex) {
            echo "Erro ao realizar a inserção: ".$ex->getMessage();
        }
    }
    public function Update ($tabela, $data, $where = array(), $where_cond = "AND")//quando coloca o valor no parâmetro ele fica opcional ao chamá-lo
    {
        try
        {
            if(!empty($tabela) && (is_array($data) && count($data) > 0) && is_array($where))
            {
                $sql = "UPDATE ".$tabela." SET ";
                $dados = array();
                foreach ($data as $chave => $valor)
                {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }
                $sql .= implode(", ", $dados);
                if(count($where) > 0)
                {
                    $dados = array();
                    foreach($where as $chave => $valor)
                    {
                        $dados[] = $chave." = '".addslashes($valor)."'";
                    }
                    $sql.= " WHERE ".implode($dados, " ".$where_cond." ");
                    //echo $sql;
                    $this->pdo->query($sql);
                    echo "Postagem atualizada com sucesso";
                }
            }
        } catch (PDOException $ex) {
            echo "Erro ao realizar a atualização: ".$ex->getMessage();
        }
        
    }
    public function Delete ($tabela, $where = array(), $where_cond = "AND")
    {
        try
        {
            if (!empty($tabela) && is_array($where) && ($where_cond == "AND" || $where_cond == "OR"))
            {               
                $sql = "DELETE FROM ".$tabela;
                if(count($where) > 0)
                {
                    $dados = array();
                    foreach($where as $chave => $valor)
                    {
                        $dados[] = $chave." = '".addslashes($valor)."'";
                    }
                    $sql.= " WHERE ".implode($dados, " ".$where_cond." ");
                    //echo $sql;
                    $this->pdo->query($sql);
                    echo "Registro excluido ";
                }
            }
        }            
        catch (Exception $ex) {
            echo "Erro ao excluir ".$ex->getMessage();
        }
    }
            
}

