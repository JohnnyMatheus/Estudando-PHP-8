<?php

// superglobais no PHP
//São variaves que estão definidas pra gente no escopo global.
//$_GET
//isset()- verifica se uma variavel foi setada, mas ignora totalmente se tem valor ou não
//empty - verifica se uma variavel foi setada, e se ela tem valor.
// ' ', null ,undefined
echo '<pre>';
var_dump($_GET);
echo '<pre/>';

$numeroCampanha = $_GET['campanha'];

if(!empty($_GET['campanha'])){
    $numeroCampanha = $_GET['campanha'];
    echo 'Você veio pela campanha'. $numeroCampanha;
}else{
    echo 'variavel não definida ou vazia';
}

//echo 'Você veio pela campanha'. $numeroCampanhanumero;

//saber qual do e-mails o usuario clicou para saber qual campanha o cliente chegou até o site
//Clique aqui -> www.empresa.com.br
//Clique aqui -> www.empresa.com.br?campanha=1
//Clique aqui -> www.empresa.com.br?campanha=2


//http://localhost/Estudando-PHP-8/Formul%C3%A1rios,%20Cookies%20e%20Sess%C3%B5es%20-%20M%C3%B3dulo%203/Multiplos%20Par%C3%A2metros%20com%20GET/dados.php?nome=Johnny&idade=30&peso=90&cidade=S%C3%A3o%20Miguel%20do%20Oeste
?>