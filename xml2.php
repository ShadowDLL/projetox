<?php
//Criar um xml a partir de um array
$data = array(
        "nome" => "Orlando",
        "sobrenome" => "Nascimento",
        "idade" => 37,
        "caracteristica" => array(
            "amigo",
            "fiel",
            "companheiro",
            "legal"
        )
);
//Criar um xml vazio a tag pode ser qualquer uma pois a primeira tag do xml é ignorada
$xml_data = new SimpleXMLElement('<data/>');
function array_to_xml($data, &$xml_data)//O & antes da variável xml_data significa 
//que a mesma pode sofrer alterações fora do método
{
    foreach ($data as $key => $value) 
    {
        if (is_numeric($key)) 
        {
            $key = 'item'.$key;//Caso a chave seja numérica é necessario adicionar uma string 
            //pois o xml não aceita tags somente com números ex: <123>
        }
        if (is_array($value)) 
        {
            $subnode = $xml_data->addChild($key);//Adiciona um filho ao array
            array_to_xml($value, $subnode);//Chama o método novamente
        }else
        {
            $xml_data->addChild($key, htmlspecialchars($value));//Retira os caracteres especiais 
            //para não dar conflito com o xml
        }     
    }
}
array_to_xml($data, $xml_data);//Chama o método criado passando o array $data e o $xml_data
$result = $xml_data->asXML();//Método asXML Transformas as informações de um objeto e gera um xml
echo $result;//Mostra na tela o resultado

