<?php
//1. Crie um array de numeros [1,2,3,4,5] e use um loop foreach para
//somar todos os elemtos do array e imprimir o resultado.

$array = [1,2,3,4,5];
$soma =0;
foreach($array as $somarNum){
    $soma +=$somarNum;
    $somarNum++;
} 

echo "A soma é $soma";

echo "<br>";


//2. Crie um array associativo de produtos com nme e preço
//(or exemplo, ["Produto1"=>10,"Produto2=>20"])


?>