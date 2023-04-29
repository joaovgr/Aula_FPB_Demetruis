<?php

$a=2;
$b=5;
$c=2;

$delta = $b*$b -  (4 *$a * $c);
 
if($delta >= 0){

$x1 = ($b * ( -1) + SQRT($delta)) /(2*$a);
$x2 = ($b * ( -1) - SQRT($delta)) /(2*$a);
echo $x1 . " " . $x2;
}
else{
echo "Delta é negativo!";


}


?>