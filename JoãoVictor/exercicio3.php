<?php

$altura = 1.80;
$peso = 89;

$imc = $peso / ($altura*$altura);

if($imc < 18.5){

echo " Abaixo do peso Bacana!";

}
elseif(($imc >= 18.5) && ($imc < 25)){
    
    echo "Peso ideal!";

}
elseif(($imc >= 25) && ($imc <= 30)){

echo "Acima do peso!";

}
else{

echo "Obesidade!";

}
?>