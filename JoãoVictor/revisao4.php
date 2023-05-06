<?php
//Escreva um código que receba um valor inteiro converta-os em anos, exiba a idadee informe se é menor ou 
//maior de idade

$valor = 5000;
$anos = $valor / 365;
if($anos >= 18){
echo number_format($anos)." Anos, é maior de Idade!";
}else{
    echo number_format($anos)." Anos, é menor de idade!";
}




?>