<?php

require "namespace.php";
require "namespace2.php";

$sobre = new \aplicativo\v1\sobre();
$sobre2 = new \aplicativo\v2\sobre();

echo $sobre->getVersion()."<br/>";
echo $sobre2->getVersion();