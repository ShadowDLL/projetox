<head>
    <meta charset="UTF-8" />
</head>

<?php
    if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['msg']) && !empty($_POST['msg']))
    {
        //Dados obtidos do formulário
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);
        //Parâmetros do email
        $para = "orlandocorreia2@hotmail.com";
        $assunto = "Pergunta do Contato";
        $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
        //Cabeçalho do email no from é o email de onde veio o ideal é colocar um e-mail que esta atrelado a hospedagem 
        //Replay-To: é a resposta o \r\n 
        //é pra pular linha em diferentes sistemas operacionais e o 
        //X.Mailer é para informar a versão atual do php
        $cabecalho = "From: orlandocorreia2@hotmail.com"."\r\n"."Replay-To: ".$email."\r\n"."X.Mailer: PHP/".phpversion();
        //Função para enviar o e-mail
        mail($para, $assunto, $corpo, $cabecalho);
        
        echo("<h2>E-mail enviado com sucesso!</h2>");
        exit;
        
    }    

?>

<form method="POST">
       Nome: <br/>
       <input type="text" name="nome" /><br/><br/>
       
       E-mail:<br/>
       <input type="email" name="email" /><br/><br/>
       
       Mensagem:<br/>
       <textarea name="msg"></textarea><br/><br/>
       
       <input type="submit" value="Enviar"/>
       
</form>
        

