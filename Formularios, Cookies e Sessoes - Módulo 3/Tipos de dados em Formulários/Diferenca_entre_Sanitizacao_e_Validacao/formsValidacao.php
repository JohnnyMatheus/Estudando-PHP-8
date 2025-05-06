<?php
require 'funcoes2.php';
$erro = null;
$sucesso = null;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $texto = $_POST['texto'];
    echo $texto;
    //Sanitizacao
    $texto = htmlspecialchars($texto);

    //
   // $texto = filter_var($texto,FILTER_SANITIZE_EMAIL);

    //remover espaços antes e depois da palavra
    $texto = trim($texto);

    //garantir que o texto tenha um @
    if(strpos($texto, '@') ==false){
        $erro = 'O texto precisa ter @';
    }

    //primeira validacao
    elseif (empty($texto)){
        $erro = "O campo texto é obrigatório";
    }elseif(strlen($texto)<5){
        $erro ='O texto tem que ter pelo menos 5 caracteres';
    }elseif(strlen($texto)>10){
        $erro = 'O texto tem que ter no máximo 10 caracteres';
    }else{
        $sucesso = 'campo validado com sucesso';
    }
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
    <h1>Formulário</h1>
    <?php   if(exibirErro($erro)) : ?>
  
        <p style="color: red;">
            <?= $erro ?>
        </p> 
     <?php endif; ?>   

        <?php if(exibirErro($sucesso)) : ?>
        <p style="color: green;">
            <?= $sucesso; ?>
        </p>
        <?php endif; ?>
    <form method="POST">
        <input type="text" name="texto" placeholder="Digite o texto">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>