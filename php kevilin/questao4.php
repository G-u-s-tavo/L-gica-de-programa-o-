<?php

$salario =1600;
$porcentagem = 20 and 15 and 10 and 5;
    if ( $salario <=280){
        $indice= ($salario*20/100);
        $total= $indice+$salario;
        echo "seu salário era $salario, agora é $total";
    } elseif ($salario <=700){  
        $indice= ($salario*15/100);
        $total= $indice+$salario;
        echo "$total";
    } elseif ($salario<=1500){
    $indice= ($salario*10/100);
    $total= $indice+$salario;
    echo "$total";

    } elseif ($salario >=1500 ){
        $indice= ($salario*5/100);
        $total= $indice+$salario;
        echo "$total";}
?>



