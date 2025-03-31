<?php

/** 
* Soma dois numeros
*@param int $n1 Primeiro numero a ser somado
*@param int $n1 Segundo numero a ser somado
*@return int soma dois nnumeros
*/
 
function somar(int $n1,int $n2):int{
    return $n1+$n2;
}


/**
*Gera uma string de saudação
*@param string $nome Nome da pessoa
*@param string $sobrenome sobrenome da pessoa
*@param string $idade idade da pessoa
*return string saudacao
**/
function parametrosNomeados(String $nome, String $sobrenome, int $idade):String {

    return "Olá, $nome $sobrenome. Você tem  anos $idade";

}

echo parametrosNomeados(nome: 'Johnny',sobrenome: 'Matheus', idade:30);
echo '<br>';
?>