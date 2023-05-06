<?php
// Escreva um código que exiba as parcelas e o valor total da compra com 1% de juros ao mês
$produto = 1200;
$valortotal = ($produto * 0.12) + $produto;
$parcela = $valortotal / 12;
$juros = $produto * 0.12;

echo"Valor das parcelas = R$ " . $parcela;
echo" <br> ";
echo" <br> ";
echo"O valor total fica  =R$ " . $valortotal;
echo" <br> ";
echo" <br> ";
echo"O valor dos juros é = R$ ". $juros;

?>