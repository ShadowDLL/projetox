<?php
session_start();
   if(isset($_SESSION["id"]) && !empty($_SESSION["id"]))
   {
       echo "Voce esta com acesso a area restrita e esta logado";
   }
 else 
 {
    header("Location: login.php");   
 }
