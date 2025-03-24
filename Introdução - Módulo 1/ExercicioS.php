<?php
/*
*Crie um script PHP que simula um sistema de login simples.
*O sistema deve verificar se o nome de usuário e a senha fornecidos estão corretos.
*X Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
*Se o nome de usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
*Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário.
*/

$nome = 'JohnnyY';
$senha = 12345;

if ($nome == 'Johnny' && $senha == 1234) {
    echo 'Bem-Vindo!';
} elseif ($nome == 'Johnny' && $senha != 1234) {
    echo 'erro de senha';
} elseif ($nome != 'Johnny' && $senha == 1234) {
    echo 'erro de nome';
} else {
    echo 'erro de nome e senha';
}

/*
Exercício 02
Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada por um resposável.
*/
echo '<br/>';

$idade = 18;
$acompanhada = true;

if ($idade >= 18 || $acompanhada == true) {
    echo 'pode entrar';
}

echo '<br/>';
echo '<br/>';
/*
exercicio 03
Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$ 200 ou se ele for um membro VIP.
Se o valor total das compras estiver entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%
*/

$valorCompra = 151.00;
$Vip = false;

if ($valorCompra > 200 || $Vip) {
    echo 'seu desconto é de 20%';
} elseif ($valorCompra >= 150 && $valorCompra <= 200) {
    echo 'desconto de 10%';
}
