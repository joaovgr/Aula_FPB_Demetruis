<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, green);
      }
      div{
        background-color: rgba(173, 216, 230, 0.70);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
    </style>
<body>
    <div>
<?php
include("conexao.php");


$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>"; 
    echo '<a href="index.php">voltar</a>' ;
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

mysqli_close($conexao);
?>
</div>
</body>