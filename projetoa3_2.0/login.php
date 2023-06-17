<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: Verdana, sans-serif;
            background: linear-gradient(to right, #b3d0f7, #b3d0f7);
            color: white;
        }

        .container {
            text-align: center;
            margin-top: 150px;
        }

        .content-box {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            background-color: #6699cc;
            border: 3px solid white;
            padding: 20px;
            border-radius: 6px;
        }

        h1 {
            color: white;
        }

        form {
            margin-top: 20px;
        }

        label {
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #001f4d;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <center>
        <h1>LOGIN</h1>
        <div class="content-box">
            <form id="login" action="logado.php" method="POST">
               <br><br> <label for="login">Login:</label><br>
                <input type="text" id="login" name="login" required><br>
             <br><br>   <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" required><br><br>
                <input type="submit" id="entrar" value="Entrar">
            </form>
        </div>
    </center>
</div>
</body>
</html>
