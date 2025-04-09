<?php
    session_start();

    $usuario = $_SESSION["usuario"] ?? null;

    if(is_null($usuario)){
        header("Location: index.php");
    }
    else{
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Séries</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/Netflix-Symbol.png" type="image/x-icon"> 
</head>
<body>

    <header>
        <nav>
            <h1 class="logo"><img src="./img/Netflix-Logo.png" alt="" height="60"></h1>
            <a href="index.php">Catálogo</a>
            <a href="protegido.php">Área Protegida</a>
            <a href="logout.php">Sair</a>
            
        </nav>
    </header>

    <main class="cadNovaSerie">

        <h1 class="add">Cadastrar Nova Série</h1>

        <form action="index.php" method="post">

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

</body>
</html>