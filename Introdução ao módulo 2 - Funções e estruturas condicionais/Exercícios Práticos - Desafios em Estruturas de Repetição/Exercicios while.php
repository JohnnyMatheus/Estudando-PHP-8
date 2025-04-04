<?php
/*EXERCICIOS COM WHILE*/

//1. Crie um script para escrever a tabuada do 5 (5x1 a 5x10) com while
echo 'TABUADA DO 5 <br/>';
$tabuada =0;

while($tabuada <=10){
    echo "5 x ".$tabuada."=".(5*$tabuada)."<br>";
    $tabuada++;
}


echo "<br/>";

//Crie um script para escrever a soma de todos os numeros de 1 a 20 com while
$contador =1;
$soma =0;
while($contador<=20){
    $soma+=$contador;
    $contador++;

}
echo "A soma de todos os numeros de 1 a 20 é = $soma";




echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";



?>