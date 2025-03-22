<?php
//strlen() - Conta o número de caracteres de uma string.

$nome =  'johnny Matheus';

echo strlen($nome);
echo '<br>';
//strpos() - Conta o número de caracteres de uma string.
$texto =  'Ciencia, Matemática, Algoritmos';
echo strpos($texto, 'Matemática');
echo '<br/>';

//Exercicio buscar a posição da palavra Algoritmos, Lógica
//e aprensente a mensagem = A palavra Algoritmos começa na posição X, e Lógica na posição Y"
$palavras = "Algoritmos, Lógica";
$x = strpos($palavras,'Algoritmos');
$y = strpos($palavras,'Lógica');

echo "A palavra Algoritmos começa na posição $x, e Lógica na posição $y";
echo '<br/>';
echo '<br/>';
echo '<br/>';

//substr() - Retorna uma parte de uma string
$texto2 = 'Pera, Uva, Maçã e salada mista';
$parteDaString = substr($texto2,6);
echo $parteDaString;
echo '<br/>';
echo '<br/>';
$parteDaString = substr($texto2,6,3);
echo $parteDaString;

echo '<br/>';
echo '<br/>';
//Exercício: Retirar apenas a palavra Pera, usando o substr

$palavraPera = substr($texto2,0,4);
echo "$palavraPera";


//
?>