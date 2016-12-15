<?php

/* 
 * Transferência de uma estrutura comum para MVC
 * 
 */

try {
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
} catch (PDOException $e) {
    echo "Falhou a conexao: ".$e->getMessage();
}
?>

<h1>Notícias</h1>
<?php
$sql = "SELECT * FROM posts LIMIT 10";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $key => $value) {
        echo "Titulo: ".$value['titulo']."<br/>";
        echo "Corpo: ".$value['corpo']."<br/><hr/>";
    }
}
