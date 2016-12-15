<html>
    <head>
        <meta charset="UTF=8"/>
        <title>Manipulação de Json</title>
    </head>
    <body>
        <?php
            $json = file_get_contents('http://www.correiodoestado.com.br/climatempo/json/');
            $json = json_decode($json);//Decodifica a string transformando em um ARRAY DE OBJETOS de Json
            //Adicionar um campo ao Json
            //Criar um objeto vazio
            $obj = new stdClass();
            //Adicionar os itens ao objeto conforme o json
            //{"codigo":212,"cidade":"Campo Grande","uf":"MS","baixa":22,"alta":26,"ico":4,"frase":"Sol com muitas nuvens durante o dia. Per\u00edodos de nublado, com chuva a qualquer hora.","data":"14\/10 Sex","dia_mes":"14\/10","dia_semana":"Sex","selecionada":1}
            $obj->codigo = 111;
            $obj->cidade = "São Paulo";
            $obj->uf = "SP";
            $obj->baixa = 16;
            $obj->alta = 25;
            $obj->frase = "Temperatura oscilando entre 16 e 25 graus";
            $obj->data = "14\/10 Sex";
            $obj->dia_mes = "Janeiro";
            $obj->dia_semana = "Segunda";
            $obj->selecionada = 1;
            //Adiciona o objeto ao Json existente
            $json->previsao[] = $obj;
            echo "Cidades retornadas: ".count($json->previsao).'<br/><br/>';
            //Exibir as cidades

            foreach ($json->previsao as $item) 
            {
             echo "Cidades: ".$item->cidade.'<br/>';
             echo "Baixa: ".$item->baixa.'<br/>';
             echo "Alta: ".$item->alta.'<br/>';
             echo "Frase: ".$item->frase.'<br/><hr/>';    
            }
            echo json_encode($json);
        ?>
    </body>
</html>

