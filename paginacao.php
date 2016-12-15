<?php
/*Lógica da paginação
 * Primeira página ex do post 1 até o 10
 * Segunda do post 11 até o 20
 * e assim por diante
 * definir a quantidade de postagens de uma página
 * 
 * quantidade de páginas: pego a quantidade de registros / pela quantidade de registros por páginas
 */
try
{
    $pdo = new PDO("mysql:dbname=blog;host=127.0.0.1", "root", "");
    
} catch (PDOException $ex) {
    die($ex->getMessage());//Para o script
}
//Pegar o total de posts
$total = 0;
$sql = "SELECT COUNT(*) AS c FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];
$paginas = $total / 3;
//exit;//para o script

$pg = '1';//Por padrão o $pg será um por que é a primeira página
$postagem = 3;
if(isset($_GET['p']) && !empty($_GET['p']))
{
    $pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * $postagem;

$sql = "SELECT * FROM posts LIMIT $p, $postagem";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0)
{
    foreach($sql->fetchAll() as $item)
    {
        echo $item['id']." - ".$item['titulo']."<br/>";
    }
}
echo "<hr/>";
for($q=0; $q < $paginas; $q++)
{
    echo '<a href="http://projetox.pc:81/paginacao.php/?p='.($q +1).'">['.($q +1).']</>';//./?p= siginifica mesma página
}

