<div class="titulo">PDO: Excluir</div>

<?php
require_once 'conexao_pdo.php';
$sql = "DELETE FROM cadastroo WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);


if($stmt->execute([1])) {
    echo 'Sucesso!';
} else {
    Echo "Erro :(";
    print_r($stmt->errorInfo());
}
 
