<div class="titulo">Download </div>

<?php 
session_start();

$arquivos = $_SESSION['arquivo'] ?? [];


$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo '<br>Arquivo válido e enviado com sucesso';
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivo'] = $arquivos; 
} else {
    '<br>Erro no upload de arquivo!';
}

?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>


<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../files/<?= $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 2rem;
    }
</style>


