<?php
require "pdostatementusuario.php";
$u = new Usuarios();
//$ar = $u->Select(1,"ocnascimento2@hotmail.com");
//$u->Inserir("Orlando","orlandocorreia2@yahoo.com.br","123");
//$u->Alterar("Orlando","orlandocorreia2@yahoo.com.br","123", 9);
$u->Excluir(10, "orlandocorreia2@yahoo.com.br");







