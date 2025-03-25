<?php

$situacaoEmprego = $esta_empregado == true ? 'Empregado sim' : 'Empregado NÃO';

// $situacaoEmprego = null;
// if ($esta_empregado) {
//     $situacaoEmprego = 'Empregado';
// } else {
//     $situacaoEmprego = 'Desempregado';
// }


// $tempo_Necessario_para_Aposentar = null;
// if ($sexo == 'M') {
//     $tempo_Necessario_para_Aposentar = IDADE_APOSENTADORIA_MASCULINA;
// } else {
//     $tempo_Necessario_para_Aposentar = IDADE_APOSENTADORIA_FEMININA;
// }

$tempo_Necessario_para_Aposentar = $sexo == 'F' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;



//exemplo

$idade = 20;
echo $idade >=18? 'Maior de idade':'Menor de idade';



?>