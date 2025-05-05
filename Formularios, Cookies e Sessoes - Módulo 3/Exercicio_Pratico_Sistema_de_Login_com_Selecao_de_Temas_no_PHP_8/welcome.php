
<?php
/**
 * Deve exibir "Bem vindo [Login do usuário] se ele estiver logado".
 * Deve ter a opçcao de sair
*/

session_start();

if(empty($_SESSION['usuario'])){
    header('Location: index.php');
    exit();
}
$cor = '#eee';
if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];
    if($tema =='escuro'){
        $cor = '#333';
    }else{
        $cor ='#fff';
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página secreta</title>
</head>
<body style="background-color: <?= $cor?>">


<?php
    echo "Bem vindo, " . $_SESSION['usuario'];
    echo "<br />";
    echo '<a href="logout.php">Sair</a>';
?>
</body>
</html>

