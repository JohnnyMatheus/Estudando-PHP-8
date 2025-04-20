<?php
//VERIFICA SE ALGUM FORMULARI FI ENVIADO COM POST OU NAO
//VERIFICA SE ALGUM FORMULARIO DO METODO POST FOI ENVIADO
                    //APENAS UM EXEMPLO
// if($_SERVER['REQUEST_METHOD'] =='POST' && !empty($_POST['login']) && !empty($_POST['password'])){
//     echo "Fomrulario enviado";
// }else{
//      echo "Formulario não enviado";
// }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Digite o Login"><br>
        <input type="password" name="password" placeholder="Digite sua senha"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>