<?php

if(!empty($_POST['nome'] && !empty($_POST['senha']))){

    $nome = htmlspecialchars($_POST['nome']);
    $senha = htmlspecialchars($_POST['senha']);
    
    echo "nome : $nome senha: $senha";
}



?>