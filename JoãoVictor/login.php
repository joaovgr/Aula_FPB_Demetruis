<?php

$login = $_POST['Login'];
$senha = $_POST['Senha'];

if ($login == "thauan"  && $senha == "8deagosto"){

   header('Location: principal.php');

} else{

   header('Location: index.php');
} 



?>