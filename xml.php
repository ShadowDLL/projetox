<?php

/* 
 * Trabalhando com XML(Objeto)
 *
 */

$xml = simplexml_load_file('ondas.xml');//Transforme num Array de Objeto
echo "Cidade ". $xml->nome.'<br/><br/>';
echo "Manha ".$xml->manha->vento.'<br/>';
echo "Tarde  ".$xml->tarde->vento.'<br/>';
echo "Noite  ".$xml->noite->vento.'<br/>';
