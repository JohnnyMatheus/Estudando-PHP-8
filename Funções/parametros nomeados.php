<?php

function parametrosNomeados(String $nome, String $sobrenome, int $idade):String {

    return "Olá, $nome $sobrenome. Você tem  anos $idade";

}

echo parametrosNomeados(nome: 'Johnny',sobrenome: 'Matheus', idade:30);
echo '<br>';

function somar(int $n1,int $n2):int
 {
    return $n1 + $n2;
}

echo somar(n1:5, n2:  5);
?>