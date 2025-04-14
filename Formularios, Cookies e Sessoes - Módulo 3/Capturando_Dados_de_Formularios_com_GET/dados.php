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


if(!empty($_GET['login'] && !empty($_GET['password']))){
    $login = htmlspecialchars($_GET['login']);
    $password = $_GET['senha'];

    echo "Seu login é $login e seua senha é $password";

}else{
    echo 'Informe o login e a senha';
}





?>