<?php
if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="login" placeholder="Digite seu login"><br>
    <input type="password" name="senha" placeholder="Digite sua senha"><br>
    <input type="submit" value="Enviar">


    </form>
</body>
</html>