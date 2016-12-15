<head>
<meta charset="UTF-8">
</head>
<?php
    require 'config.php';
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
        $id = addslashes($_GET["id"]);
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        $pdo->query($sql);
        header("Location: controledeusuarios.php");//Redireciona para a página;
    }  
    else
    {
        header("Location: controledeusuarios.php");//Redireciona para a página;
    }
?>

