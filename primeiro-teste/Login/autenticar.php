<?php
session_start();
require_once "conexao.php";

$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']); //  função igual no insert

$sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
    exit;
} else {
    echo "Usuário ou senha inválidos. <a href='login.php'>Tentar novamente</a>";
}
?>
