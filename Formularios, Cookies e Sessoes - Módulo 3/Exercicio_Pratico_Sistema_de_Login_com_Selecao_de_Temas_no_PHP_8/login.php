<?php

/**
 * Usuário válido: admin
 * senha válida: admin 
 * header passa um cabeçalho 
 */
 session_start();

 if(!empty($_POST['usuario']) && !empty($_POST['password']) ){
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    if($usuario == 'admin' && $senha=='admin'){
        $_SESSION['usuario'] = $usuario;

        header('Location: welcome.php');

    }else{
        echo 'Usuario ou senha inválidos <br>';
        echo '<a href="index.php">Tentar novamente</a>';
    }
 }else{
    echo 'Preencha todos os dados';
    echo '<a href="index.php">Voltar</a>';
 }


