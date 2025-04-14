<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}

// Processa o envio do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $produtor = $_POST['produtor'];
    $nota = $_POST['nota'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    // Armazena a nova série na sessão
    $_SESSION['catalogo'][] = [
        'id' => uniqid(), // Garante um ID único
        'titulo' => $titulo,
        'genero' => $genero,
        'ano' => $ano,
        'produtor' => $produtor,
        'nota' => $nota,
        'descricao' => $descricao,
        'imagem' => $imagem
    ];

    // Redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Séries</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header>
    <nav>
        <h1 class="logo">Séries+</h1>
        <a href="index.php">Início</a>

        <?php if (!isset($_SESSION["usuario"])): ?>
            <a href="login.php">Login</a>
        <?php else: ?>
            <a href="protegido.php">Nova Série</a>
            <a href="logout.php">Sair</a>
        <?php endif; ?>
    </nav>
</header>

<section>
<main class="cadNovaSerie">
    <h1 class="add">Cadastrar Nova Série</h1>

    <form action="protegido.php" method="post">
        <label class="topicos">Título</label>
        <input class="insercoes" type="text" name="titulo" required>

        <label class="topicos">Gênero</label>
        <input class="insercoes" type="text" name="genero" required>

        <label class="topicos">Ano</label>
        <input class="insercoes" type="number" min="0" max="2025" name="ano" required>

        <label class="topicos">Produtor</label>
        <input class="insercoes" type="text" name="produtor" required>

        <label class="topicos">Nota (0 a 10)</label>
        <input class="insercoes" type="number" step="0.1" min="0" max="10" name="nota" required>

        <label class="topicos">Descrição</label>
        <textarea class="insercoes" name="descricao" rows="5" required></textarea>

        <label class="topicos">URL da Imagem</label>
        <input class="insercoes" type="text" name="imagem" required>

        <button class="btnCadastrar" type="submit">Cadastrar</button>
    </form>
</main>
</section>

</body>
</html>