<?php
// superglobais no PHP
//São variaves que estão definidas pra gente no escopo global.
//$_GET
echo '<pre>';
var_dump($_GET);
echo '<pre/>';

$nome = "Johnny";
$idade = "30";
$peso = 90;
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$peso = $_GET['peso'];
$cidade =$_GET['cidade'];


echo "Nome: $nome\nIdade:  $idade\npeso: $peso\nCidade: $cidade";


http://localhost/Estudando-PHP-8/Formul%C3%A1rios,%20Cookies%20e%20Sess%C3%B5es%20-%20M%C3%B3dulo%203/Multiplos%20Par%C3%A2metros%20com%20GET/dados.php?nome=Johnny&idade=30&peso=90&cidade=S%C3%A3o%20Miguel%20do%20Oeste
?>