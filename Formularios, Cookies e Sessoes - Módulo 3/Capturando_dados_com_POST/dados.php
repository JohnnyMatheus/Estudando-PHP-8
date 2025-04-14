<?php
//$_GET -> Dados são passados pela URL
//Limite de 2000 caracteres
//Dados ficam expostos e são facilmente manipulavéis

//$_POST - Dados são passados pelo corpo da requisição http
// Não há limite de tamanho
//Os dados não são tão facilmente modificados pelo usuário


if(!empty($_POST['login'] && $_POST['senha'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    echo "Login: $login Senha: $senha";

}else{
    echo 'Infore o usuário e a senha';
}


