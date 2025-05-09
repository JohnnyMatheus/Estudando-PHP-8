<?php
require 'funcoes.php';
$tecnologias = ['HTML','CSS','JAVASCRIPT','PHP'];
$opcoesValidas = ['JAVASCRIPT','PHP'];



$erro = null;
$sucesso = null;



if($_SERVER['REQUEST_METHOD']=='POST'){
   $opcoes = $_POST['opcoes'];
   if(count($opcoes) !=2){
    $erro = 'Selecione duas tecnologias, EXATAMENTE';
   }


   foreach($opcoes as $opcao){
    //SE A OPÇAO ESCOLHIDA NÃO ESTIVER NO ARRAY DARA ERRO
    //PARAMETER TEMPERING - ALTERAÇÃO/ MODIFICAÇÃO  DE PARAMETROS
    if(!in_array($opcao, $opcoesValidas)){
        $erro = 'Selecione item válido';
    }
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
        <select name="opcoes[]" multiple>
         <?php foreach($tecnologias as $tecnologia) :?>
            <option value="<?= $tecnologia?>"> <?= $tecnologia?></option>
         <?php endforeach?>    
          
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>