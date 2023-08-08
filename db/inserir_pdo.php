<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, email nascimento , site, filhos, salario)
VALUES (
    'Malu Eloá Fabiana da Costa',
    'malueloadacosta@ggm.com.br',
    '1998-08-07',
    'https://malueloadacosta.com.br',
    0,
    2000
)";

$conexao = novaConexao();

// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}













