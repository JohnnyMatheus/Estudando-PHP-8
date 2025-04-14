<?php
//$_GET -> Dados são passados pela URL
//Limite de 2000 caracteres
//Dados ficam expostos e são facilmente manipulavéis

//$_POST - Dados são passados pelo corpo da requisição http
// Não há limite de tamanho
//Os dados não são tão facilmente modificados pelo usuário

//TRATAR OS DADOS
/* 
htmlspecialchars()


*/

echo '<pre>';
var_dump($_GET);
echo '<pre/>';

$nome = $_GET['pessoa'];

echo "Ola, $nome";

?>