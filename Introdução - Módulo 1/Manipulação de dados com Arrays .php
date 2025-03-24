<?php 
$frutas =['Laranja', 'Limão','Banana'];
echo $frutas[0];


//Adicionar itens no array array_push();
echo '<h1>Adicionar itens no array array_push();</h1>';
array_push($frutas,'uva');
echo '<pre>';
var_dump($frutas);
echo '<pre/>';

echo'<br>';

//Remove o item do inicio do array array_shift()
echo '<h1>Remove o item do inicio do array array_shift()</h1>';
$frutas =['Laranja', 'Limão','Banana'];
array_shift($frutas);
echo '<pre>';
var_dump($frutas);
echo '<pre/>';


echo'<br>';

//Remove o ultimo item do array array_pop()
echo '<h1>Remove o ultimo item do array array_pop()</h1>';

$frutas =['Laranja', 'Limão','Banana'];
array_pop($frutas);
echo '<pre>';
var_dump($frutas);
echo '<pre/>';


//Adicionar um novo indice
echo '<h1>Adicionar um novo indice</h1>';

$disciplina = ['Matemática','Lógica de Programação'];

$disciplina[2] = 'Teoria dos Grafos';
echo '<pre>';
var_dump($disciplina);
echo '<pre/>';
echo '<pre/>';

//modificar um indice existente
echo '<h1>modificar um indice existente</h1>';

$disciplina = ['Matemática','Lógica de Programação'];
$disciplina[0] = 'JAVA';
echo '<pre>';
var_dump($disciplina);
echo '<pre/>';

echo '<br />';
//Contar itens do array
echo '<h1>Contar itens do array</h1>';
$numeros = [0,1,2,3,4,5,6,7,8,9];
echo $contarItens = count($numeros);

echo '<br />';
//Pesquisar se tem algo no array -> in_array()
echo '<h1>Pesquisar se tem algo no array -> int_array()</h1>';
$pesquisaArray = ['Laranja','maça','manga','petista'];
echo $temLaranha = in_array("Laranja",$pesquisaArray);
echo '<br/>';
var_dump($temLaranha);

echo '<br/>';

//Juntar arrays array_merge()
echo '<h1>Juntar arrays array_merge()</h1>';
$lista1 = ['PC','NOTEBOOK','MOUSE'];
$lista2 = ['TECLADO','FONTE','PETISTA'];

$juntarArray =  array_merge($lista1,$lista2);
var_dump($juntarArray);



echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';
?>