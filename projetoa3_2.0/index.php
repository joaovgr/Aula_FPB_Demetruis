<?php
session_start();
?>
<html>
<style>
    body {
        font-family: Verdana, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, green);
    }

    div {
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

    input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
</style>

<body>
    <div>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'administrador') {
        ?>
                <a href="cadastro.php">Cadastrar Usuário</a><br><br>
                <a href="listar.php">Listar Usuários</a><br><br>
        <?php
            }
        ?>
            <a href="alterarsenha.php">Alterar Senha</a><br><br>
            <a href="logout.php">Sair</a><br>
        <?php
        } else {
        ?>
            <h1>Olá, visitante.</h1><br><br><br>
            <b>Faça o Login:</b> <a href="login.php"><br><br>Entrar</a>
        <?php
        }
        ?>
    </div>
</body>
</html>
