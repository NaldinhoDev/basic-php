<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 7

//Entradas
echo "Qual seu nome? ";
$nome = fgets (STDIN);
$nome = trim ($nome) . "\n\n";
echo "Qual sua idade? ";
$anos = fgets (STDIN);
$anos = trim ($anos). "\n\n";
echo "Agora, os meses: ";
$meses = fgets (STDIN);
$meses = trim ($meses) . "\n\n";
echo "E quantos dias: ";
$dias = fgets (STDIN);
$dias = trim ($dias). "\n\n";

//Processamento
const Anos = 365;
const Mes = 30;
$idade = ($anos * Anos) + ($meses * Mes) + $dias;

//Saídas
echo  "Você nasceu á " . $idade . " dias, " . $nome . "\n";

?>