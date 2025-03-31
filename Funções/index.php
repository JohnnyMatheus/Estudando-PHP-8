<?php

function saudacao(){
    return 'Olá Mundo!';
}

echo saudacao();

echo '<br>';
function retornaNumero(){
    return 3;
}
$x = retornaNumero() + 3;
var_dump($x);

echo '<br>';

function verificaIdade(int $anoNacimento):int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNacimento;
    return $idade;
}
// echo verificaIdade(1995);
echo '<br>';
echo '<br>';

function portaoDeBalada($anoNacimento,$acompanhado = false)
{
    $idadeParaEntrarNaBalada = 16;
    $idade = verificaIdade($anoNacimento);

    if($idade >= $idadeParaEntrarNaBalada){
        return 'Pode entrar na balada';
    }elseif($idade < $idadeParaEntrarNaBalada &&  $acompanhado){
        return 'Pode entrar na balada com seu acompanhante';
    }else{
        return 'Você não pode entrar na balada';
    }

}

echo "1994 sem acompanhante:". portaoDeBalada(1994) ."<br>";
echo "1999 com acompanhante:". portaoDeBalada(1999,true) ."<br>";
echo "2014 com acompanhante:". portaoDeBalada(2014,true) ."<br>";
echo "2015 com acompanhante:". portaoDeBalada(2015,false) ."<br>";

echo '<br>';
echo '<br>';

function somar(float $num1,float $num2, float $num3):float
{
    return  $num1 + $num2 + $num3;
}

var_dump(somar(1,1,1));


?>
