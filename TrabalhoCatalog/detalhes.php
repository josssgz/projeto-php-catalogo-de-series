<?php
// Suponhamos que as séries estejam armazenadas em um banco de dados ou array como o exemplo anterior
$series = [
    1 => [
        'id' => 1,
        'titulo' => 'Breaking Bad',
        'genero' => 'Crime, Drama, Suspense',
        'ano' => 2008,
        'produtor' => 'AMC',
        'nota' => 9.5,
        'descricao' => 'A jornada intensa de Walter White, um professor de química frustrado que, após ser diagnosticado com câncer terminal, decide fabricar metanfetamina para sustentar sua família, mergulhando num mundo sombrio de crime, violência e transformação moral.',
        'imagem' => 'https://example.com/breaking-bad.jpg'
    ],
    2 => [
        'id' => 2,
        'titulo' => 'Stranger Things',
        'genero' => 'Ficção Científica, Mistério, Drama',
        'ano' => 2016,
        'produtor' => 'Netflix',
        'nota' => 8.7,
        'descricao' => 'Ambientada nos anos 80, a série mistura ficção científica com nostalgia retrô ao acompanhar um grupo de amigos que enfrentam criaturas de outra dimensão, experimentos secretos do governo e uma garota com poderes sobrenaturais chamada Eleven.',
        'imagem' => 'https://example.com/stranger-things.jpg'
    ],
    3 => [
        'id' => 3,
        'titulo' => 'The Office',
        'genero' => 'Comédia',
        'ano' => 2005,
        'produtor' => 'NBC',
        'nota' => 8.9,
        'descricao' => 'Com um humor sutil e situações absurdas, a série mostra a rotina da Dunder Mifflin através de um estilo documental, explorando as relações entre os funcionários, liderados pelo desajeitado, porém carismático, Michael Scott.',
        'imagem' => 'https://example.com/the-office.jpg'
    ],
    4 => [
        'id' => 4,
        'titulo' => 'Game of Thrones',
        'genero' => 'Fantasia, Drama, Aventura',
        'ano' => 2011,
        'produtor' => 'HBO',
        'nota' => 9.2,
        'descricao' => 'Baseada nos livros de George R. R. Martin, a série apresenta uma batalha épica por poder entre famílias nobres em Westeros, marcada por traições, batalhas épicas, criaturas mitológicas e uma ameaça gelada que ameaça toda a humanidade.',
        'imagem' => 'https://example.com/game-of-thrones.jpg'
    ],
    5 => [
        'id' => 5,
        'titulo' => 'Hannibal',
        'genero' => 'Suspense, Crime, Drama',
        'ano' => 2013,
        'produtor' => 'NBC',
        'nota' => 8.5,
        'descricao' => 'Explora a relação intensa entre o brilhante psiquiatra Dr. Hannibal Lecter, que esconde sua verdadeira identidade como um assassino canibal, e Will Graham, um investigador com empatia excepcional para entender a mente de serial killers.',
        'imagem' => 'https://example.com/hannibal.jpg'
    ],
    6 => [
        'id' => 6,
        'titulo' => 'Lioness',
        'genero' => 'Ação, Drama, Espionagem',
        'ano' => 2023,
        'produtor' => 'Paramount+',
        'nota' => 7.4,
        'descricao' => 'Inspirada em operações reais da CIA, a série acompanha agentes femininas de elite inseridas em missões altamente perigosas no Oriente Médio, enfrentando dilemas éticos, conflitos pessoais e os limites da lealdade e do dever.',
        'imagem' => 'https://example.com/lioness.jpg'
    ],
    7 => [
        'id' => 7,
        'titulo' => 'Brooklyn Nine-Nine',
        'genero' => 'Comédia, Policial',
        'ano' => 2013,
        'produtor' => 'NBC',
        'nota' => 8.4,
        'descricao' => 'Uma abordagem leve e divertida ao gênero policial, seguindo o talentoso e imaturo detetive Jake Peralta e sua equipe excêntrica no 99º distrito do Brooklyn, com destaque para o humor sarcástico e a liderança do estoico Capitão Holt.',
        'imagem' => 'https://example.com/brooklyn-nine-nine.jpg'
    ],
    8 => [
        'id' => 8,
        'titulo' => 'Dexter',
        'genero' => 'Crime, Drama, Mistério',
        'ano' => 2006,
        'produtor' => 'Showtime',
        'nota' => 8.6,
        'descricao' => 'Dexter Morgan leva uma vida dupla como analista forense da polícia de Miami e assassino em série que segue um código moral: eliminar apenas aqueles que escaparam da justiça, lutando com sua consciência e sede por sangue.',
        'imagem' => 'https://example.com/dexter.jpg'
    ],
    9 => [
        'id' => 9,
        'titulo' => 'The Walking Dead',
        'genero' => 'Terror, Drama, Ação',
        'ano' => 2010,
        'produtor' => 'AMC',
        'nota' => 8.1,
        'descricao' => 'Após acordar de um coma, o xerife Rick Grimes descobre um mundo devastado por zumbis e lidera um grupo de sobreviventes que enfrentam não apenas os mortos-vivos, mas também os horrores dos vivos em uma luta brutal pela sobrevivência.',
        'imagem' => 'https://example.com/the-walking-dead.jpg'
    ],
    10 => [
        'id' => 10,
        'titulo' => 'A Maldição da Residência Hill',
        'genero' => 'Terror, Drama, Mistério',
        'ano' => 2018,
        'produtor' => 'Netflix',
        'nota' => 8.6,
        'descricao' => 'Com uma narrativa não linear, a série explora o trauma psicológico de uma família marcada por experiências paranormais dentro da mansão Hill, equilibrando terror sobrenatural e drama emocional com profundidade e simbolismo.',
        'imagem' => 'https://example.com/maldicao-residencia-hill.jpg'
    ],
    11 => [
        'id' => 11,
        'titulo' => 'South Park',
        'genero' => 'Comédia, Animação, Satírico',
        'ano' => 1997,
        'produtor' => 'Comedy Central',
        'nota' => 8.7,
        'descricao' => 'Com humor ácido e irreverente, a série animada satiriza eventos atuais, celebridades e política através das aventuras politicamente incorretas de quatro crianças em uma pequena cidade do Colorado.',
        'imagem' => 'https://example.com/south-park.jpg'
    ],
    12 => [
        'id' => 12,
        'titulo' => 'Alice in Borderland',
        'genero' => 'Ficção Científica, Suspense, Ação',
        'ano' => 2020,
        'produtor' => 'Netflix',
        'nota' => 7.7,
        'descricao' => 'Arisu e seus amigos são transportados para uma realidade paralela onde precisam competir em jogos mortais que testam suas habilidades físicas e psicológicas, lutando para sobreviver e desvendar os segredos do novo mundo.',
        'imagem' => 'https://example.com/alice-in-borderland.jpg'
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
