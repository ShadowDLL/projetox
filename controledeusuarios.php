<head>
<meta charset="UTF-8">
</head>
<?php
    require 'config.php';
?>
<a href="adicionar.php">Adicionar Usuário</> 
<table border ="0" width="100%">
        <tr>
            <td>Nome</td>
            <td>E-Mail</td>
            <td>Ações</td>      
        </tr>
<?php
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    if($sql->rowCount()>0)
    {
        echo  "<table border = '0' width = '100%'";
        foreach($sql->fetchAll() as $usuario)
        {
            echo  '<tr>';
            echo  '<td>'.$usuario["nome"].'</td>';
            echo  '<td>'.$usuario["email"].'</td>';
            echo  '<td><a href="editar.php?id='.$usuario["id"].'">Editar</> - <a href="excluir.php?id='.$usuario["id"].'">Excluir</></td>';
            echo  '</tr>';
        }
    }
?>
</table>

        

