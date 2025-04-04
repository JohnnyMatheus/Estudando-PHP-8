<?php
//EXERCICIOS FOR
//1. Crie um script que escreva todos os numeros de 1 a 10 com FOR.

for($numero=1;$numero<=10;$numero++){
    echo "$numero <br/>";
}

//2. Escreva um scrit H que desenhe meio triângulo com asterisco (*), de 10 linhas.

for($linhas=1;$linhas<=10;$linhas++){
    for($colunas=1;$colunas<=$linhas;$colunas++){
        echo '*';
    }
 echo "<br/>";
}

?>