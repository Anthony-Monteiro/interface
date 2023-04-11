<?php

require_once('interface.php');
require_once('modelo.php');

$t = new Template();

$t->setVariable('nome', 'José Da Silva');
$t->setVariable('email', 'jose@gmail.com');

echo $t->getHtml('<h1>{nome}</h1><p>{email}</p>');

echo "<pre>";
var_dump($t);


?>