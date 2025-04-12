<?php
// superglobais no PHP
//São variaves que estão definidas pra gente no escopo global.
//$_GET

echo '<pre>';
var_dump($_GET);
echo '<pre/>';

$nome = $_GET['pessoa'];

echo "Ola, $nome";

?>