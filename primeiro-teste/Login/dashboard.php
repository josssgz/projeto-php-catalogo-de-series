<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Logado</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Você está logado</p>
    <a href="logout.php">Sair</a>
</body>
</html>
