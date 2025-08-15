<?php
//autor: Reginaldo
//Data : 14/08/2025
//Assunto : exercicio 4

//Entrada

echo"Qual seu nome? \n";

$nome = fgets(STDIN);

echo"Ola. . ." . $nome . "\nPreciso de umas informações:\n";
echo"quantos quilogramas serão?\n";
$m = fgets(STDIN);
echo"qual a altura sera?\n";
$a = fgets(STDIN);
echo"quantos metros em segundos ira percorrer? \n";
$t = fgets(STDIN);

$cavalos = ($m*$a/$t)/745.6999;

echo"O senhor(a) vai precisar de: ". number_format($cavalos,2) ." cavalos " ;
?>