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

if(!empty($_POST['login']&& !empty($_POST['senha']))){

    $login = htmlspecialchars($_POST['login']); //ira exibir o script na tela como string e não sera executado
    $senha = htmlspecialchars($_POST['senha']);
    
    echo "Seu login é $login e sua senha é $senha";
}



/*
<script>alert(1)</script>
*/

