<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 8



//Entradas
$media1 = (8 + 9 + 7)/ 3;
$media2 = (4 + 5 + 6)/3;

//Processamento
$mediatotal = $media1 + $media2;
$media = $mediatotal / 2;

//Saídas
echo "Voce sabia que a média dos numeros, 8, 9 e 7 é " . $media1;
echo "Agora, a média dos numeros 4, 5 e 6 é " . $media2;
echo"\n\nOu seja, a média dos dois valores juntos seria " . $mediatotal . ".\n\n";

echo "Agora, se utilizarmos a soma das duas médias, vamos obter a 'média das médias' que ficaria " . $media . ".\n\n";
?>