<?php
    session_start();
?>

<title>Catálogo de Séries</title>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="./img/Netflix-Symbol.png" type="image/x-icon"> 

<body>

    <header>
        <nav>
            <h1 class="logo"><img src="./img/Netflix-Logo.png" alt="" height="60"></h1>
            <a href="index.php">Catálogo</a>
            <?php if (!isset($_SESSION["usuario"])): ?>
                <a href="login.php">Login</a>
            <?php else: ?>
                <a href="protegido.php">Área Protegida</a>
                <a href="logout.php">Sair</a>
            <?php endif; ?>

            <form class="search-form" action="buscar.php" method="GET">
                <input type="text" placeholder="Buscar por nome ou gênero">
                <button type="submit">Buscar</button>
            </form>
        </nav>
    </header>

    <h1>PÁGINA INICIAL COM CATÁLOGO DE SÉRIES</h1>

</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<h1>Nova Série Cadastrada</h1>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>


