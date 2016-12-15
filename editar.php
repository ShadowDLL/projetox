<head>
<meta charset="UTF-8">
</head>
<?php
    require 'config.php';
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        $id = addslashes($_GET["id"]);
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
        }
        else 
        {
            header("Location: controledeusuarios.php");//Redireciona para a página;
        }
    } 
    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"]))
    {
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $senha = md5(addslashes($_POST["senha"]));
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
        $pdo->query($sql);
        header("Location: controledeusuarios.php");//Redireciona para a página;
    }
?>
<form method="POST">
    Nome:</br>
    <input type="text" name="nome" value ="<?php echo $dado['nome']; ?>" /></br></br>
    E-mail:</br>
    <input type="text" name="email" value ="<?php echo $dado['email']; ?>"/></br></br>
    Senha:</br>
    <input type="password" name="senha"/></br></br></br>
    <input type="submit" value="Atualizar" />
</form>