<?php
//VERIFICA SE ALGUM FORMULARI FI ENVIADO COM POST OU NAO
//VERIFICA SE ALGUM FORMULARIO DO METODO POST FOI ENVIADO
                    //APENAS UM EXEMPLO
// if($_SERVER['REQUEST_METHOD'] =='POST' && !empty($_POST['login']) && !empty($_POST['password'])){
//     echo "Fomulario enviado";
// }else{
//      echo "Formulario não enviado";
// }
$mensagem = '';
if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

   
    if($login == 'ADMIN' && $senha == 'ADMIN'){
        $mensagem = "Login efetuado com sucesso";

    }else{
        $mensagem = "Falha ao logar";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
</head>
<body>
    <form action="formulario.php" method="POST">
        <input type="text" name="login" placeholder="Digite o Login"  value="<?= $login ?? ''?>"><br>
        <input type="password" name="senha" placeholder="Digite sua senha" value="<?=$senha ?? '' ?>"><br>
        <input type="submit" value="Enviar">
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo $mensagem;
            }
        ?>
    </form>
</body>
</html>