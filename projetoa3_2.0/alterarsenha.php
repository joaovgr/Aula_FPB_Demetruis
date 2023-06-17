<?php
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver autenticado
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realize a conexão com o banco de dados
    $conexao = mysqli_connect('localhost', 'root', '', 'projetoa3','3306');

    // Verifique se a conexão foi estabelecida corretamente
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Recupere os dados do formulário
    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];

    // Verifique se a nova senha e a confirmação correspondem
    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    // Execute a lógica para atualizar a senha no banco de dados
    $nomeUsuario = $_SESSION['nome']; // Assumindo que o campo 'nome' é usado como identificador único na tabela de usuários
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {
        echo "<div style='background-color: green; padding: 10px; color: white;'>Senha atualizada com sucesso!</div>";
        echo '<br><br>';
        echo '<a href="login.php" style="color: blue;">Voltar para a página de login</a>'; // Botão para voltar para a página de login
    } else {
        echo "<div style='background-color: red; padding: 10px; color: white;'>Erro ao atualizar a senha: " . mysqli_error($conexao) . "</div>";
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
}
?>

<html>
<style>
    body {
        font-family: Verdana, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, green);
    }

    .container {
        background-color: rgba(173, 216, 230, 0.70);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .container h1 {
        color: black;
        margin-bottom: 20px;
    }

    .container input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .container input[type="submit"] {
        background-color: black;
        color: white;
        cursor: pointer;
    }

    .container input[type="submit"]:hover {
        background-color: blue;
    }

    .message {
        margin-top: 10px;
        padding: 10px;
        color: white;
    }

    .success {
        background-color: green;
    }

    .error {
        background-color: red;
    }

    .container a {
        color: blue;
        text-decoration: none;
        margin-top: 10px;
    }
</style>

<body>
<div class="container">
    <!-- Exiba o formulário de alteração de senha -->
    <h1>Alterar Senha</h1>
    <form method="POST" action="alterarsenha.php">
        <br><label for="nova_senha">Nova senha:</label>
        <input type="password" name="nova_senha" id="nova_senha" required>

        <br><br><label for="confirmar_senha">Confirmar senha:</label>
        <input type="password" name="confirmar_senha" id="confirmar_senha" required>

        <br><br><br><input type="submit" value="Alterar Senha">
    </form>

    <?php
    // Exiba a mensagem de sucesso ou erro
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $class = $_SESSION['message_class'];
        echo "<div class='message $class'>$message</div>";

        // Limpe a mensagem da sessão
        unset($_SESSION['message']);
        unset($_SESSION['message_class']);
    }
    ?>

    <br><a href="logout.php">Sair</a>
</div>
</body>
</html>
