<?php
// Habilitar exibição de erros para depuração (Remover antes de produção)
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Inicia a sessão no início do código para evitar problemas de session_start após envio de conteúdo
session_start();

// Verifique se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];

    // Verifica se as senhas coincidem
    if ($senha !== $confirmar) {
        echo "Senhas não coincidem.";
        exit;
    }

    // Carregar os usuários existentes do arquivo JSON
    $usuarios = [];

    // Se o arquivo de usuários existe, carrega o conteúdo
    if (file_exists("usuarios.json")) {
        $usuarios = json_decode(file_get_contents("usuarios.json"), true);
    }

    // Verifica se o usuário já existe
    foreach ($usuarios as $u) {
        if ($u["usuario"] === $usuario) {
            echo "Usuário já existe.";
            exit;
        }
    }

    // Cria um novo usuário
    $novoUsuario = [
        "usuario" => $usuario,
        "senha" => password_hash($senha, PASSWORD_DEFAULT)
    ];

    // Adiciona o novo usuário ao array
    $usuarios[] = $novoUsuario;

    // Salva o array de usuários no arquivo JSON
    file_put_contents("usuarios.json", json_encode($usuarios, JSON_PRETTY_PRINT));

    // Inicia a sessão e loga automaticamente o usuário após o cadastro
    $_SESSION['usuario'] = $usuario;  // Cria uma sessão de login

    // Redireciona para a página inicial (index.php)
    header("Location: index.php");  // Redireciona para a página inicial
    exit;  // Certifica-se de que o script para após o redirecionamento
}

// Carregar os usuários existentes do arquivo JSON
$usuarios = [];

// Se o arquivo de usuários existe, carrega o conteúdo
if (file_exists("usuarios.json")) {
    $usuarios = json_decode(file_get_contents("usuarios.json"), true);
}

// Verifica se o admin já existe
$adminExists = false;
foreach ($usuarios as $u) {
    if ($u['usuario'] === 'admin') {
        $adminExists = true;
        break;
    }
}

// Se o admin não existe, cria o usuário admin
if (!$adminExists) {
    $usuarios[] = [
        "usuario" => "admin",
        "senha" => password_hash("1234", PASSWORD_DEFAULT) // Cria o hash da senha "1234"
    ];
}

// Salva o array de usuários no arquivo JSON
file_put_contents("usuarios.json", json_encode($usuarios, JSON_PRETTY_PRINT));

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Nova Conta</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

<div class="login-box">
    <img src="img/user-blue-icon.jpg" class="avatar" alt="Avatar">
    <h2>Criar Nova Conta</h2>
    
    <form action="nova-conta.php" method="POST">
        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Senha" required>

        <label for="confirmar">Confirmar Senha</label>
        <input type="password" id="confirmar" name="confirmar" placeholder="Confirmar Senha" required>

        <input type="submit" value="Criar Conta">
    </form>

    <div class="forgot">
        <a href="login.php">Voltar ao Login</a>
    </div>
</div>

</body>
</html>
