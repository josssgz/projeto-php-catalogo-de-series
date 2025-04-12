<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usuarios = json_decode(file_get_contents("usuarios.json"), true);

    foreach ($usuarios as $usuario) {
        if ($usuario["email"] === $email && password_verify($senha, $usuario["senha"])) {
            $_SESSION["usuario"] = $email;
            header("Location: protegido.php");
            exit;
        }
    }

    echo "Email ou senha inválidos!";
}
?>
