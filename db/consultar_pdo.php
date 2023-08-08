<div class="titulo">PDO: Consultar </div>

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);