<?php
//autor: Reginaldo
//Data : 14/08/2025
//Assunto : exercicio 1

//Entrada

echo"Digite o valor da temperatura em celsius:\n";

$c = fgets(STDIN); //STDIN -> Standtard Input (Entrada padrrão=terminal)

//Processamento
$f = $c * 1.8 + 32;
$k = $c + 273.15;
$Re = $c * 0.8;
$Ra = $c * 1.8 + 459.67;


//saida

echo"A temperatura em fahrenheit é:\n" . $f;
echo"\nA temperatura em Kelvin é:\n" . $k;
echo"\nA temperatura em Réaumur é:\n" . $Re;
echo"\nA temperatura em Rankine é:\n" . $Ra;

?>
