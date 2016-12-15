<head>
<meta charset="UTF-8">
</head>
<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados ".$e->getMessage();
}

