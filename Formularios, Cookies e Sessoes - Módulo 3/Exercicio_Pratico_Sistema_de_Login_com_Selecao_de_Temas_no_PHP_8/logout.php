<?php

/**
 * Deve excluir o cookie e a session
 */


 session_start();

 unset($_SESSION['usuario']);

 header('Location: index.php');