<?php
require 'contantes.php';
require 'data.php';
//$idade_aposentadoria_masculinha = 65;
//$idade_aposentadoria_feminina = 62;




//CONDICIONAL TERNARIA
//coloquei direto la embaixo
//$situacaoEmprego = $esta_empregado == true ? 'Empregado sim' : 'Empregado NÃO';

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



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?php echo $nome; ?></strong></p>
            <p>Idade: <strong><?= $idade; ?></strong></p>
            <p>Sexo: <strong><?php echo $sexo; ?></strong></p>
            <p>Salário Mensal: <strong>R$<?php echo number_format($salarioMensal, 2, ',', '.'); ?></strong></p>
            <p>Salário Anual: <strong><?= $salarioMensal * 12 ?></strong></p>
            <p>Status de Emprego: <strong><?= $esta_empregado == true ? 'Empregado sim' : 'Empregado NÃO'; ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?= $tempo_Necessario_para_Aposentar - $idade ?></strong></p>
            <p>Habilidades: <strong>
                    <?= implode(', ', $habilidade); ?>

                </strong></p>
        </div>
    </div>
</body>

</html>