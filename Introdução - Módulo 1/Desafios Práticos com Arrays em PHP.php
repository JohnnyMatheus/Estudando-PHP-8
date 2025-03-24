<?php
echo '<h1>Exercício 01:</h1>';
echo '<h3>1. Crie um array chamado $Cidades contendo nome de 5 cidades que você quer visitar.</h3>';
echo '$Cidade = ["São Miguel do Oeste", "São Paulo","Campo Grande","Cascavel","Foz do Iguaçu"]';

$Cidade = ['São Miguel do Oeste', 'São Paulo','Campo Grande','Cascavel','Foz do Iguaçu'];
echo '<br />';
echo '<h3>2. Imprima na tela o valor da terceira cidade deste array.</h3>';
echo $Cidade[2];

echo '<br />';

echo '<br />';
echo '<br />';
echo '<br />';


echo '<h1>Exercício 02:</h1>';
echo '<h3>1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.</h3>';
echo '$alunos = [
    "Johnny" =>30,
    "Maiara" =>20,
    "Johnny Matheus" =>29
]';
$alunos = [
    'Johnny' =>30,
    'Maiara' =>20,
    'Johnny Matheus' =>29
];
echo '<h3>2. Imprima a idade do segundo aluno.</h3>';
echo $alunos['Maiara'];

echo '<br />';

echo '<h1>Exercício 03:</h1>';
echo '<h3>1. Crie um array chamado $cores contendo três cores.</h3>';
echo '$cores = ["Verde","Amarelo","Azul"];';
$cores = ['Verde','Amarelo','Azul'];
echo '<h3>2. Adicione uma nova cor ao final do array.</h3>';
echo '$cores[4] = "Branco"';
$cores[4] = 'Branco';
//ou pode ser usado assim $cores[] = 'Branco'; sem especificar posicão
echo '<h3>3. Remova a primeira cor do array.</h3>';
echo 'array_shift($cores)';
array_shift($cores);
echo '<h3>4. Imprima o array resultante.</h3>';
echo '<pre>';
var_dump($cores);
echo '</pre>';
print_r($cores);

echo '<br />';

echo '<h1>Exercício 04:</h1>';
echo '<h3>1. Crie um array associativo chamado $preco onde as chaves são nomes de produtos e os valores são seus preços.</h3>';
echo '$preco =["Notebook"=>100,"Computador"=>200,"xobox"=>300]';
$preco =["Notebook"=>100,"Computador"=>200,"Xbox"=>300];

echo '<h3>2. Atualize o preço de um dos produtos adicionando + R$10,00</h3>';
$preco["Xbox"] = $preco["Xbox"]+10;
//ou pode se usar assim $preco["Xbox"] += +10;
print_r($preco);

echo '<h3>3. Atualize o preço do primeiro produto reduzindo - 1,00.</h3>';
echo '$preco["Xbox"] = $preco["Xbox"]-1';
$preco["Notebook"] = $preco["Notebook"]-1;
//ou pode se usar assim $preco["Xbox"] -= +1;
echo '<h3>4. Imprima o array resultante.</h3>';
print_r($preco);
?>