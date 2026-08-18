<?php

$salario = 1500;
$horastr = 2; // horas que foram trabalhadas
$hora = 5/100*$salario; // valor da hora  
$imposto = 5/100*$salario and 10/100*$salario and 20/100*$salario;
 
    if ($salario <=900){
    echo $salario + $horastr*$hora;
} elseif ($salario >=1500){
    $imposto = 5/100*$salario;
    echo $salario + $horastr*$hora - $imposto ;}


?>