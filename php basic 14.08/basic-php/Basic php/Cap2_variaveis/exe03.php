<?php
//autor: Reginaldo
//Data : 14/08/2025
//Assunto : exercicio 3

//Entrada
echo"Digite 1 para transporte\n";
echo"Digite 2 para alimentacão\n";
echo"Digite 3 para ambos\n";
$opcao =fgets(STDIN);

switch($opcao){

    case 1:

    echo"Digite o seu gasto mensal com transporte:\n";

    $trans = fgets(STDIN);
    $mediam = ($trans)/30;
    echo"Sua media de gasto com transporte é:\n R$" . $mediam;
    break;

case 2:

    echo"Digite o seu gasto mensal com alimentação:\n";

    $alim = fgets(STDIN);

    $mediam = ($alim)/30;
    echo"Sua media de gasto com alimentação é:\n R$"  . $mediam;
    break;

    case 3:

    echo"Digite o seu gasto mensal com transporte:\n";

    $trans = fgets(STDIN);

    echo"Digite o seu gasto mensal com alimentação:\n";

    $alim = fgets(STDIN);

    $mediaa = ($trans + $alim)/30;

    echo"Sua media de gasto com transporte e alimentação é:\n R$"  . number_format($mediaa,2);
    break;
}
?>