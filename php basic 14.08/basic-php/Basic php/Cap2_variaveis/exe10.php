<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 10


//Entradas
echo "qual o seu salario? ";
$salario = fgets (STDIN) . "\n\n";
const SM = 1864.00;

//Processamento
$nsm = $salario / SM;//

//Saídas
echo "Voce recebe o equivalente a " . number_format($nsm, 2) . " salários minímos.\n\n";
?>