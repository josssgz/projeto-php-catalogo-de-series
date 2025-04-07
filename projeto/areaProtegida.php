
<!-- UPDATE - Hover + bonito no menu -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Netflix - Séries</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/Netflix-Symbol.png" type="image/x-icon"> 
</head>
<body>

    <header>
        <nav>
            <h1 class="logo"><img src="./img/Netflix-Logo.png" alt="" height="60"></h1>
            <a href="areaProtegida.php">Início</a>
            <a href="areaProtegida.php">Área Protegida</a>
            <a href="areaProtegida.php">Sair</a>
        </nav>
    </header>

    <main>

        <h1 class="add">Cadastrar Nova Série</h1>

        <form action="cadastrarSerie.php" method="post">

            <label>Título</label>
            <input type="text" name="titulo" required>

            <label>Gênero</label>
            <input type="text" name="genero" required>

            <label>Ano</label>
            <input type="number" min="0" max="2025" name="ano" required>

            <label>Produtor</label>
            <input type="text" name="produtor" required>

            <label>Nota (0 a 10)</label>
            <input type="number" step="0.1" min="0" max="10" name="nota" required>

            <label>Descrição</label>
            <textarea name="descricao" rows="5" required></textarea>

            <label>URL da Imagem</label>
            <input type="text" name="imagem" required>

            <button type="submit">Cadastrar</button>
        </form>

    </main>

</body>
</html>

<!-- j.?? -->
