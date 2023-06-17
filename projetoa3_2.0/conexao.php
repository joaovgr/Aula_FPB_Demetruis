<?php
$conexao = mysqli_connect('localhost', 'root', '', 'projetoa3', '3306');
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>