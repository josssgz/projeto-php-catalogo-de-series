<?php
// Habilitar exibição de erros para depuração
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Verifica se a pesquisa foi feita através do GET
$query = $_GET['q'] ?? '';

// Definir os dados das séries
$series = [
    [
        "id" => 1,
        "titulo" => "Breaking Bad",
        "categoria" => "Drama",
        "ano" => 2008,
        "imagem" => "img/breakingbad.jpg"
    ],
    [
        "id" => 2,
        "titulo" => "Stranger Things",
        "categoria" => "Ficção Científica",
        "ano" => 2016,
        "imagem" => "img/stranger-things.jpg"
    ],
    [
        "id" => 3,
        "titulo" => "The Office",
        "categoria" => "Comédia",
        "ano" => 2005,
        "imagem" => "img/the-office.jpg"
    ],
    [
        "id" => 4,
        "titulo" => "Game of Thrones",
        "categoria" => "Fantasia, Drama",
        "ano" => 2011,
        "imagem" => "img/game-of-thrones.jpg"
    ],
    [
        "id" => 5,
        "titulo" => "Hannibal",
        "categoria" => "Crime, Drama, Horror",
        "ano" => 2013,
        "imagem" => "img/hannibal.jpg"
    ],
    [
        "id" => 6,
        "titulo" => "Lioness",
        "categoria" => "Drama, Ação",
        "ano" => 2022,
        "imagem" => "img/lioness.jpg"
    ],
    [
        "id" => 7,
        "titulo" => "Brooklyn Nine-Nine",
        "categoria" => "Comédia, Crime",
        "ano" => 2013,
        "imagem" => "img/brooklyn-nine-nine.jpg"
    ],
    [
        "id" => 8,
        "titulo" => "Dexter",
        "categoria" => "Crime, Drama, Mistério",
        "ano" => 2006,
        "imagem" => "img/dexter.jpg"
    ],
    [
        "id" => 9,
        "titulo" => "The Walking Dead",
        "categoria" => "Drama, Terror",
        "ano" => 2010,
        "imagem" => "img/the-walking-dead.jpg"
    ],
    [
        "id" => 10,
        "titulo" => "A Maldição da Residência Hill",
        "categoria" => "Terror, Drama",
        "ano" => 2018,
        "imagem" => "img/malducao-residencia-hill.jpg"
    ],
    [
        "id" => 11,
        "titulo" => "South Park",
        "categoria" => "Animação, Comédia",
        "ano" => 1997,
        "imagem" => "img/south-park.jpg"
    ],
    [
        "id" => 12,
        "titulo" => "Alice in Borderland",
        "categoria" => "Ação, Mistério, Suspense",
        "ano" => 2020,
        "imagem" => "img/alice-in-borderland.jpg"
    ]
];

// Filtra as séries com base na consulta
$filteredSeries = array_filter($series, function($serie) use ($query) {
    return stripos($serie['titulo'], $query) !== false ||
           stripos($serie['categoria'], $query) !== false ||
           stripos($serie['ano'], $query) !== false;
});
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Filtrar Séries</title>
    <link rel="stylesheet" href="catalogo.css">
</head>
<body>

    <header>
        <nav>
            <h1 class="logo">Séries+</h1>
            <a href="index.php">Início</a>
            <a href="filtrar.php">Filtrar</a>
            <?php if (!isset($_SESSION["usuario"])): ?>
                <a href="login.php">Login</a>
            <?php else: ?>
                <a href="protegido.php">Área Protegida</a>
                <a href="logout.php">Sair</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="catalogo">
        <div class="busca-container">
            <h2>Buscar Série</h2>
            <form class="busca-form" action="filtrar.php" method="GET">
                <input type="text" name="q" placeholder="Digite o nome, gênero ou ano da série..." value="<?= htmlspecialchars($query) ?>">
                <input type="submit" value="Buscar">
            </form>
        </div>

        <h2>Resultados da Busca</h2>
        <div class="grid-series">
            <?php if (empty($filteredSeries)): ?>
                <p>Nenhuma série encontrada para sua pesquisa.</p>
            <?php else: ?>
                <?php foreach ($filteredSeries as $serie): ?>
                    <div class="serie-card">
                        <img src="<?= $serie['imagem'] ?>" alt="<?= $serie['titulo'] ?>">
                        <h3><?= $serie['titulo'] ?></h3>
                        <p><strong>Categoria:</strong> <?= $serie['categoria'] ?></p>
                        <p><strong>Ano:</strong> <?= $serie['ano'] ?></p>
                        <a class="vermais-btn" href="detalhes.php?id=<?= $serie['id'] ?>">Ver mais</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>
