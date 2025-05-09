<?php
require 'funcoes.php';
$tecnologias = ['HTML','CSS','JAVASCRIPT','PHP'];

// $tecnologias_banco = [
//    ['codigo' => 'html', 'nome' => 'HTML'],
//    ['codigo' => 'css', 'nome' => 'CSS'],
//    ['codigo' => 'javascript', 'nome' => 'JAVASCRIPT'],
//    ['codigo' => 'php','nome' => 'PHP'],
//    ['codigo' => 'rn', 'nome'=> 'React Native'],
//    ['codigo' => 'bootstrap', 'nome' => 'Bootstrap']

// ];

$tecnologias_api = [
    'html' => 'HTML',
    'css' => 'CSS',
    'javascript' => 'JAVASCRIPT',
    'php' => 'PHP',
    'rn' => 'React Native',
    'bootstrap' => 'Bootstrap'

];


$erro = null;
$sucesso = null;



if($_SERVER['REQUEST_METHOD']=='POST'){
    
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
        <select name="opcao">
          <?php foreach($tecnologias_api as $codigo => $tecnologia) :?> 
            <option value="<?= $codigo?>"> 
                <?= $tecnologia; ?>
            </option>
          <?php endforeach?>  
           
        
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>