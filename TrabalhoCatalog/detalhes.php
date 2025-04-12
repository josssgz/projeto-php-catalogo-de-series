<?php
// Suponhamos que as séries estejam armazenadas em um banco de dados ou array como o exemplo anterior
$series = [
    1 => [
        'id' => 1,
        'titulo' => 'Stranger Things',
        'genero' => 'Ficção Científica',
        'ano' => 2016,
        'produtor' => 'Netflix',
        'nota' => 8.7,
        'descricao' => 'Uma série de mistério e ficção científica situada nos anos 80.',
        'imagem' => 'https://example.com/stranger-things.jpg'
    ],
    2 => [
        'id' => 2,
        'titulo' => 'Breaking Bad',
        'genero' => 'Crime',
        'ano' => 2008,
        'produtor' => 'AMC',
        'nota' => 9.5,
        'descricao' => 'A história de um professor de química que se transforma em traficante.',
        'imagem' => 'https://example.com/breaking-bad.jpg'
    ]
    // Adicione mais séries conforme necessário
];

$id = $_GET['id'] ?? null;

if ($id && isset($series[$id])) {
    $serie = $series[$id];
} else {
    echo "Série não encontrada!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Série</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav>
        <h1 class="logo"><img src="./img/Netflix-Logo.png" alt="" height="60"></h1>
        <a href="index.php">Catálogo</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Sair</a>
    </nav>
</header>

<main class="detalhes">
    <h1><?php echo $serie['titulo']; ?></h1>
    <img src="<?php echo $serie['imagem']; ?>" alt="<?php echo $serie['titulo']; ?>" class="serie-imagem">
    <p><strong>Gênero:</strong> <?php echo $serie['genero']; ?></p>
    <p><strong>Ano:</strong> <?php echo $serie['ano']; ?></p>
    <p><strong>Produtor:</strong> <?php echo $serie['produtor']; ?></p>
    <p><strong>Nota:</strong> <?php echo $serie['nota']; ?></p>
    <p><strong>Descrição:</strong> <?php echo $serie['descricao']; ?></p>
</main>

</body>
</html>
