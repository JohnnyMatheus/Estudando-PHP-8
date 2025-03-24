<?php
//operadores lógicos
//Operador Lógico (E) => AND -:> NO PHP -> &&
//VERIFICA DE AMBAS CONDIÇÕES SÃP VERDADEIRAS

$idade = 18;
$temcareira = true;
if ($idade >= 18 && $temcareira) {
    echo 'Pode dirigir';
} else {
    echo 'Não pode dirigir';
}
echo '<br />';
//Operador Lógico OR -> OU EM PHP -> ||

$idade = 18;
$temcareira = false;
if ($idade >= 18 || $temcareira == true) {
    echo 'Pode dirigir';
} else {
    echo 'Não pode dirigir';
}

 echo '<br />';
//OPERADOR LÓGICO DE NEGAÇÃO !

$temcareira = true;
if (!$temcareira) {
    echo 'Não pode dirigir';
} else {
    echo 'Você pode dirigir';
}

echo '<br />';
// null = nulo,ou vazio

$temcareira = null;
if ($temcareira ===false) {
    echo 'Não pode dirigir';
} elseif ($temcareira ===true){
    echo 'Você pode dirigir';
}else{
    echo 'Não sei se você pode dirigir';

}

