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
    <link rel="stylesheet" href="assts/css/exercicio.css">
    <title>Exercícios</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" >Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <mani class="principal">
        <div class="conteudo">
           <?php
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php") 
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </mani>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y');
        ?>
    </footer> 
</body>
</html>