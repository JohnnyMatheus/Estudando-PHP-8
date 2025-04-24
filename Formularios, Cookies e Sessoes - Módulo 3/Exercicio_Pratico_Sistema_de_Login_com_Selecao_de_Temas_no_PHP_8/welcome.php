<?php 

/**
 * Deve exibir Bem vindo [Login do usuario]
 * Deve ter a opçao de sair.
 * 
 */

 session_start();

 if(empty($_SESSION['usuario'])){
    header('Location: login.php');
    exit();
 }


 echo "Bem vindo". $_SESSION['usuario'];