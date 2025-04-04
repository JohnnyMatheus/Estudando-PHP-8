<?php


$nomes = ["Johnny","Matheus","Nogueira","Medeiro"];

foreach($nomes as $nome){
    echo "$nome <br/>";
}

echo "<br/>";
//Array associativo

$dados = [
    'nome'=> 'Johnny Matheus',
    'Idade'=> 30
];


foreach($dados as $chave =>$valor){
    echo "$chave ->$valor <br/>";
}


?>