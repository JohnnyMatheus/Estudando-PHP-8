<?php

$lista = array("Java","kotlin");
echo $lista[0];
echo '<br />';

$lista2 = ["Java","Kotlin","Python","PHP"];
echo $lista2[2];
echo '<br />';

var_dump($lista2);

$carros = [
    'gol' => 1,
    'Tesla' =>3,
    'BMW' =>6
];

echo $carros['gol'];
echo '<br/>';

var_dump($carros);

//tag <pre></pre> organiza o array visualmente
echo '<pre>';
var_dump($carros);
echo '</pre>';

$disciplinas =[
    'java' =>[
        'entrada de dados',
        'saida de dados',
        'vetores',
        'matrizes',
        'operador lógico',
        'operadores aritméticos'
    ],
    'python' =>[
        'entrada de dados',
        'saida de dados',
        'vetores',
        'matrizes',
        'operador lógico',
        'operadores aritméticos'
    ]

];

echo '<br />';

echo '<pre>';
var_dump($disciplinas['java']);
echo '</pre>';

echo '<br />';
echo '<br />';

echo '<pre>';
var_dump($disciplinas['java'][1]);
echo '</pre>';






?>