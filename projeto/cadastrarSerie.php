<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<h1>Série Cadastrada</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>