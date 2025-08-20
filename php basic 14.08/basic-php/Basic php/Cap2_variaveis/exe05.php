<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 5


//Entradas
echo "Qual o seu nome?\n";
  $nome = fgets (STDIN);
  $nome = trim ($nome);
echo "Bem vindo(a), " . $nome . "!!\n\n";


//Processamento
 echo "Primeiro digite o raio da lata de oleo: \n";
  $r = fgets (STDIN); //Volume

 echo "Informe a altura da lata: \n ";
  $a = fgets (STDIN); //Altura
  $a = trim ($a);
  echo "\n";

//Saídas
$v = 3.14159 * $r * $r * $a;//Volume 
echo "O Volume total da lata de oleo é: " . $v . "\n\n";

?>