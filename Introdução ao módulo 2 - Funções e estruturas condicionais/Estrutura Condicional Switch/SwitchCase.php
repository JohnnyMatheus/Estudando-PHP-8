<?php
/**
 * switch (variavel)
 * case(valor):
 * faz alguma coisa
 * break;
 */



function diaSemana(int $dia):string{
    switch($dia){
        case 1:
        return "segunda-feira";
        break;
        case 2:
        return "Terça-feira";
        break;
        case 3:
        return "Quarta-feira";
        break;
        case 4:
        return"Quinta-feira";
        break;
        case 5:
        return "Sexta-feira";
        break;
        case 6: 
        return "Sábado";
        break;
        case 7:
        return "Domingo";
        break;
        default:
<<<<<<< Updated upstream:Introdução ao módulo 2 - Funções e estruturas condicionais/Estrutura Condicional Switch/SwitchCase.php
        return "Dia inválido";

        
    }
=======
        return "Dia inválido";      
    }
echo 



>>>>>>> Stashed changes:Estrutura Condicional Switch/SwitchCase.php
}

echo "Dia da semana: ".diaSemana(1)."<br>";
echo "Dia da semana: ".diaSemana(8);

?>