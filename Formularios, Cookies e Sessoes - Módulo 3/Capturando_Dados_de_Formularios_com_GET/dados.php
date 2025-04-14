<?php

if(!empty($_GET['login'] && !empty($_GET['password']))){
    $login = $_GET['login'];
    $password = $_GET['password'];
    echo "Seu login é $login e seua senha é $password";

}





?>