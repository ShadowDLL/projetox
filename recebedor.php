<?php
  if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']))
  {
    echo "Meu e-mail �: ". $_POST['email']."</br></br>"."e a minha senha �: ".$_POST['senha'];
  }
?>