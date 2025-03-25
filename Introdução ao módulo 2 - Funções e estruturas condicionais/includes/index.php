<?php
//include e require
//include executa se o arquivo existir se ele nao exitir ele vai dar um erro em tela mas vai continuar rodando o codigo
//require se o arquivo n existir para a execução e morstra um erro na tela.

require 'nome.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de arquivos</title>
</head>
<body>
    <h1>Hello world, Eu sou <?= $nome;?></h1>

</body>
</html>