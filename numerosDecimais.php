<?php
//EXEMPLO DE FLOAT
$altura = 1.85;

$num1 = 1.10;
$num2 = 2.0;

echo "Multiplicação: $num1 x $num2 =".($num1*$num2);
echo '<br/>';
echo "Adição: $num1 + $num2 =".($num1+$num2);
echo '<br/>';
echo "Subtração: $num1 - $num2 =".($num1-$num2);
echo '<br/>';
echo "Divisão: $num1 / $num2 =".($num1/$num2);

echo '<br/>';
echo '<br/>';
echo '<br/>';

//Arredondamento round(): 
$arredondar = 3.9999;
echo 'Arredondar ='.round($arredondar);
echo '<br/>';

//Arredontamento floor() para baixo:

echo 'Arredondar ='.floor($arredondar);
echo '<br/>';

//Arredontamento ceil() para cima:

echo 'Arredondar ='.ceil($arredondar);
echo '<br/>';

?>