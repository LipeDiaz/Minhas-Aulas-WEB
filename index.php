<?php 
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assts/css/estilo.css">
    <title>Curso PHP</title>
    <link rel="icon" type="image/x-icon" href="icone/favicon.ico.png">
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índece dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <mani class="principal">
        <div class="conteudo">
           <?php
                require_once('menu.php');
           ?>
        </div>
    </mani>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer> 
</body>
</html>