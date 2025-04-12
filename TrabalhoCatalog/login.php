<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: index.php");  // Redireciona para a página inicial se já estiver logado
    exit;
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if ($usuario && $senha) {
        if (file_exists("usuarios.json")) {
            $usuarios = json_decode(file_get_contents("usuarios.json"), true);

            foreach ($usuarios as $u) {
                if ($u["usuario"] === $usuario && password_verify($senha, $u["senha"])) {
                    $_SESSION["usuario"] = $usuario;
                    header("Location: index.php");
                    exit;
                }
            }
        }

        $mensagem = '<div class="erro-login">Usuário ou senha inválidos.</div>';
    } else {
        $mensagem = "<h4>Preencha todos os campos.</h4>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

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
            <a href="#">Esqueceu sua senha?</a>
        </div>

        <div class="forgot">
            <a href="criar-conta.php">Criar nova conta</a>
        </div>

        <?php if (!empty($mensagem)) echo $mensagem; ?>
    </form>
</div>

</body>
</html>
