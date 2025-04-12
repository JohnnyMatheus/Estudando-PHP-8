<?php
//superglobais no PHP
//São variáveis que estão definidas pra gente no escopo global.
//$_GET
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

$nome = $_GET['pessoa'];
$idade =$_GET['idade'];
echo "Olá, $nome";


?>