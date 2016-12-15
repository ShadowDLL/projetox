<head>
<meta charset="UTF-8">
</head>
<?php
    require 'config.php';
    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"]))
    {
        echo"entrou";
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $senha = md5(addslashes($_POST["senha"]));
        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $pdo->query($sql);
        header("Location: controledeusuarios.php");//Redireciona para a página;
    }   
?>
<form method="POST">
    Nome:</br>
    <input type="text" name="nome" /></br></br>
    E-mail:</br>
    <input type="text" name="email"/></br></br>
    Senha:</br>
    <input type="password" name="senha"/></br></br></br>
    <input type="submit" value="Cadastrar" />
</form>

