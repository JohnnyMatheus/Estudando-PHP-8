<?php

//Calculo do salário anual
/**
 * Calcula o salario anual baseado no salário mensal
 * @param float $salarioMensal Salario Mensal
 * @return float Salário Anual
*/
function calcularSalarioAnual(float $salarioMensal):float{
    $tercoDeFerias = $salarioMensal /3;
    $salarioAnual = ($salarioMensal *13 + $tercoDeFerias);
    return $salarioAnual;
}

//Quantos anos faltam para se aposentar

//Transformar um numero em valor monetário

?>