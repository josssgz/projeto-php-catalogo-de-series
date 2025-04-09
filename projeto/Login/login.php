<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if ($usuario && $senha) {
        if ($usuario === "admin" && $senha === "1234") {
            $_SESSION["usuario"] = $usuario;
            header("Location: dashboard.php");
            exit;
        } else {
            $mensagem = "<h4>Algo errado! Verifique seu usuário ou senha.</h4>";
        }
    } else {
        $mensagem = "<h4>Preencha todos os campos.</h4>";
    }
}
?>

<div class="login-box">
    <img src="img/user-blue-icon.jpg" class="avatar" alt="Avatar">

    <h2>Login</h2>
    <form action="" method="post">

        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Senha" required>

        <input type="submit" value="Entrar">

        <div class="forgot">
            <a href="#">Esqueceu sua Senha?</a>
        </div>

        <?php if (!empty($mensagem)) echo $mensagem; ?>

    </form>
</div>

</body>
</html>
