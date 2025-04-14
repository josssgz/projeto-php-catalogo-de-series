<?php
    session_start();
?>

<title>Catálogo de Séries - Login</title>
<link rel="shortcut icon" href="./img/Netflix-Symbol.png" type="image/x-icon"> 

<h2>PÁGINA DE LOGIN</h2>

<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="password" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php
    $usuario = $_SESSION["usuario"] ?? null;
    
    if(!is_null($usuario)){
        header("Location: protegido.php");
    }
    
    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if(!is_null($usuario) && !is_null($senha)){
        if($usuario === "admin" && $senha === "123"){
            $_SESSION["usuario"] = $usuario;
            header("Location: protegido.php");
        }
        else{
            echo "<h4>Usuário ou senha incorretos!</h4>";
            echo "<h4>usuario: admin <br> senha: 123</h4>";
        }
    }
    else{
        echo "<h4>usuario: admin <br> senha: 123</h4>";
    }
?>