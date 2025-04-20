<?php

//Verificar se os dados do formulário foram enviados

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    //Verifica se oo login == admin e senha == admin
    
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);
    //echo "Seu login :$login sua senha: $senha ";
    $mensagem= null;
    if ($login == 'admin' && $senha == 'admin'){
        $mensagem = "Você logou com sucesso";

    }else{
        $mensagem = "Usuário ou senha invalidos";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dados.php" method="POST">
        <input type="text" name="login" placeholder="Digite seu login:"><br /><br />
        <input type="password" name="senha" placeholder="Digite sua senha:"><br /><br />
        <input type="submit" value="Enviar">
        <?php
            if(!empty($mensagem)){
                echo $mensagem;
            }
        ?>
    </form>
</body>
</html>
