<div class="titulo">Exluir Registro #01</div>

<?php
require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 5";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso :)';
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();