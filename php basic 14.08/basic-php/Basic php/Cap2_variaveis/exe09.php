<?php
//Autor: Reginaldo de Oliveira Ribeiro da Silva
//Data: 14/08/2025
//Assunto: Exercicio 9


echo "Quanto custa seu veiculo: R$";
$vv = fgets (STDIN) . "\n";//Valor Veiculo
echo "\n\n";

//Processamento

$vv1 = $vv - ($vv * 0.07); //Valor do Carro em um ano
$vi1 = $vv + ($vv * 0.07); //Valor Do Investimetno
$dif1 = $vi1 - $vv1; //Valor da diferença entre os dois

$vv2 = $vv1 - ($vv1 * 0.07);
$vi2 = $vi1 + ($vi1 * 0.07);
$dif2 = $vi2 - $vv2;

$vv3 = $vv2 - ($vv2 * 0.07);
$vi3 = $vi2 + ($vi2 * 0.07);
$dif3 = $vi3 - $vv3;

$vv4 = $vv3 - ($vv3 * 0.07);
$vi4 = $vi3 + ($vi3 * 0.07);
$dif4 = $vi4 - $vv4;

$vv5 = $vv4 - ($vv4 * 0.07);
$vi5 = $vi4 + ($vi4 * 0.07);
$dif5 = $vi5 - $vv5;

$vv6 = $vv5 - ($vv5 * 0.07);
$vi6 = $vi5 + ($vi5 * 0.07);
$dif6 = $vi6 - $vv6;

$vv7 = $vv6 - ($vv6 * 0.07);
$vi7= $vi6 + ($vi6 * 0.07);
$dif7 = $vi7 - $vv7;

$vv8 = $vv7 - ($vv7 * 0.07);
$vi8 = $vi7 + ($vi7 * 0.07);
$dif8 = $vi8 - $vv8; 

$vv9 = $vv8 - ($vv8 * 0.07); 
$vi9 = $vi8 + ($vi8 * 0.07); 
$dif9 = $vi9 - $vv9; 

$vv10 = $vv9 - ($vv9 * 0.07);
$vi10 = $vi9 + ($vi9 * 0.07);
$dif10 = $vi10 - $vv10; 

//Saídas
echo "        Valor do carro | Valor do investimento | Diferença \n";

echo "       ----------------------------------------------------\n";

 echo " 1°Ano     " . number_format($vv1, 2,) . "      |   " . number_format($vi1, 2,) . "   |      " . number_format($dif1, 2,) . "\n";
 echo " 2°Ano     " . number_format($vv2, 2,) . "      |   " . number_format($vi2, 2,) . "   |      " . number_format($dif2, 2,) . "\n";
 echo " 3°Ano     " . number_format($vv3, 2,) . "      |   " . number_format($vi3, 2,) . "   |      " . number_format($dif3, 2,) . "\n";
 echo " 4°Ano     " . number_format($vv4, 2,) . "      |   " . number_format($vi4, 2,) . "   |      " . number_format($dif4, 2,) . "\n";
 echo " 5°Ano     " . number_format($vv5, 2,) . "      |   " . number_format($vi5, 2,) . "   |      " . number_format($dif5, 2,) . "\n";
 echo " 6°Ano     " . number_format($vv6, 2,) . "      |   " . number_format($vi6, 2,) . "   |      " . number_format($dif6, 2,) . "\n";
 echo " 7°Ano     " . number_format($vv7, 2,) . "      |   " . number_format($vi7, 2,) . "   |      " . number_format($dif7, 2,) . "\n";
 echo " 8°Ano     " . number_format($vv8, 2,) . "      |   " . number_format($vi8, 2,) . "   |      " . number_format($dif8, 2,) . "\n";
 echo " 9°Ano     " . number_format($vv9, 2,) . "      |   " . number_format($vi9, 2,) . "   |      " . number_format($dif9, 2,) . "\n";
 echo "10°Ano     " . number_format($vv10, 2,) . "      |   " . number_format($vi10, 2,) . "   |      " . number_format($dif10, 2,) . "\n\n";

?>