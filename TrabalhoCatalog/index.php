<?php
session_start();


// Vê se tem séries cadastradas
$catalogo = $_SESSION['catalogo'] ?? [];

include_once "dados_series.php";

// Adiciona as séries cadastradas pelo usuario no pag
$catalogo = $_SESSION['catalogo'] ?? [];
$series = array_merge($series, $catalogo); // junta fixos + novos
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Séries</title>
    <link rel="stylesheet" href="./css/catalogo.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="logo">Séries+</h1>
            <a href="index.php">Início</a>
    
            <form action="filtrar.php" method="GET" style="display: inline;">
                <input type="text" name="busca" placeholder="Buscar título, gênero, ano" required>
                <button type="submit">Buscar</button>
            </form>

        <?php if (!isset($_SESSION["usuario"])): ?>
            <a href="login.php">Login</a>
        <?php else: ?>
            <a href="protegido.php">Nova Serie</a>
            <a href="logout.php">Sair</a>
        <?php endif; ?>
        </nav>
    </header>

    <main class="catalogo">
        <h2>Catálogo</h2>

        <div class="grid-series">
            <?php foreach ($series as $serie): ?>
                <div class="serie-card">
                <img src="<?= $serie['imagem_catalogo'] ?? $serie['imagem'] ?>" alt="<?= $serie['titulo'] ?>">
                    <h3><?= $serie['titulo'] ?></h3>
                    <a class="vermais-btn" href="detalhes.php?id=<?= $serie['id'] ?>">Ver mais</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>
</html>