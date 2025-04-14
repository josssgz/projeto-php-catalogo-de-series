<?php
session_start();

// Inclui as séries fixas do arquivo
include_once "dados_series.php";

// Recupera as séries da sessão, se existirem
$catalogo = $_SESSION['catalogo'] ?? [];

// Junta todas as séries (fixas + cadastradas)
$todasSeries = array_merge($series, $catalogo);

// Pega o ID da URL
$id = $_GET['id'] ?? null;

// Procura a série pelo ID
$serieEncontrada = null;
foreach ($todasSeries as $s) {
    if (isset($s['id']) && $s['id'] == $id) {
        $serieEncontrada = $s;
        break;
    }
}

if (!$serieEncontrada) {
    echo "Série não encontrada!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Série</title>
    <link rel="stylesheet" href="css/detalhes.css">
</head>
<body>

    <header>
        <nav>
            <h1 class="logo">Séries+</h1>
            <a href="index.php">Início</a>

            <?php if (!isset($_SESSION["usuario"])): ?>
                <a href="login.php">Login</a>
            <?php else: ?>
                <a href="protegido.php">Nova Serie</a>
                <a href="logout.php">Sair</a>
            <?php endif; ?>
        </nav>
    </header>

    <section>
        <main class="detalhes">
            <img src="<?php echo $serieEncontrada['imagem_detalhes'] ?? $serieEncontrada['imagem'] ?? 'https://via.placeholder.com/300x400'; ?>" alt="<?php echo $serieEncontrada['titulo'] ?? 'Sem título'; ?>" class="serie-imagem">
            
            <h1><?php echo $serieEncontrada['titulo'] ?? 'Sem título'; ?></h1>
            
            <p><strong>Gênero:</strong> <?php echo $serieEncontrada['genero'] ?? 'Não informado'; ?></p>
            
            <p><strong>Ano:</strong> <?php echo $serieEncontrada['ano'] ?? 'Não informado'; ?></p>
            
            <p><strong>Produtor:</strong> <?php echo $serieEncontrada['produtor'] ?? 'Não informado'; ?></p>
            
            <p><strong>Nota:</strong> <?php echo $serieEncontrada['nota'] ?? 'Não informado'; ?></p>
            
            <p><strong>Descrição:</strong> <?php echo $serieEncontrada['descricao'] ?? 'Descrição não disponível.'; ?></p>
        </main>
        <a href="index.php" class="botao-voltar">Voltar</a>
    </section>
</body>
</html>