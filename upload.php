<pre>
<?php

    //print_r($_FILES);
if(isset($_FILES['arquivo']))
{
    if(count($_FILES['arquivo']['tmp_name']) > 0)
    {
        $quantidade =  count($_FILES['arquivo']['tmp_name']);
        for($i=0; $i<$quantidade;$i++)
        {
            $nomedoarquivo = md5($_FILES['arquivo']['name'][$i].time().rand(0,999)).'.mp3';
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$i],'arquivos/'.$nomedoarquivo);
        }
        echo "$quantidade Arquivos enviados com sucesso";
    }
}
?>
</pre>

<form method ="POST" enctype="multipart/form-data">
    Arquivo: </br>
    <input type="file" name="arquivo[]" multiple /></br></br>
    <input type="submit" value="Enviar"/>
</form>