<?php

require 'templates.php';

$array = array(
           "titulo" => "Título da Página",
           "nome" => "Orlando"
);

$template = new template('templates.phtml');
$template->render($array);

