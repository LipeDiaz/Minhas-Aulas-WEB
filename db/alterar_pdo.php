<div class="titulo">PDO: Alterar</div>

<?php

require_once "conexao_pdo.php";

$sql = "UPDATE cadastro
SET nome = ?, nascimento = ?, email = ?, 
site = ?, filhos = ?, salario = ? WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Valentina',
    '1999-03-11',
    'moura90@vmetaiscba.com.br',
    'https://ana.com.br',
    2,
    50000,
    13
]);

if($resultado) {
    echo "Sucesso";
} else {
    print_r($stmt->errorInfo());
}

