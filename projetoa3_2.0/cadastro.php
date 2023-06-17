<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    // Verificar se o nome de login já está em uso
    $verificarLogin = "SELECT * FROM login WHERE login = '$login'";
    $resultado = mysqli_query($conexao, $verificarLogin);

    if (mysqli_num_rows($resultado) > 0) {
        echo "O nome de login '$login' já está em uso. Por favor, escolha outro.";
    } else {
        $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
        if (mysqli_query($conexao, $insert)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    body {
        font-family: Verdana, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, green);
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-box {
        background-color: rgba(173, 216, 230, 0.70);
        padding: 80px;
        border-radius: 15px;
        color: white;
        text-align: center;
    }

    input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
</style>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Cadastro</h1>
            <form id="cadastro" action="cadastro.php" method="POST">
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="nome" required><br><br>
                <label for="login">Login:</label><br>
                <input type="text" name="login" id="login" required><br><br>
                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" id="senha" required><br><br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
