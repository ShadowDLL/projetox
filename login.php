<head> 
    <meta charset = "UTF-8"/>
</head>
<?php
session_start();
if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha']))
{
    $dsl = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbsenha = "";
    $pdo = new PDO($dsl, $dbuser, $dbsenha);
    
    $email = addslashes($_POST['usuario']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);
    if($sql->rowCount()>0)
    {
        $dado = $sql->fetch();
        $_SESSION['id']= $dado['id'];
        header("Location: site.php");
    }
}
?>
<form method="POST">
<h1>Tela de login</h1>
    Usuário:</br>
<input type="text" name="usuario"/></br></br>
Senha:</br>
<input type="password" name="senha"/></br></br>
<input type="submit" value="Login"/>
</form>

