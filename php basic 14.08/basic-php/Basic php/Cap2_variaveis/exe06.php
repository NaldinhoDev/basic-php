<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 6


echo "Qual é a distância que você ira percorrer";
$dist= fgets(STDIN);

// Constantes
const vc = 6.50; // Valor combustivel 6.50
const cc  = 12; //Distância em Km/h. cc: Consumo Carro
echo "\n";
$percurso = (vc * $dist)/ cc;
echo "Voce vai gastar : R$" . number_format ($percurso, 2);

?>