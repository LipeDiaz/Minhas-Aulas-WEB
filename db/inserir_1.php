<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Ana Lucia',
    '1998-04-27',
    'ana@abdalathomaz.adv.br',
    'https://marcelofelipe.com.br',
    null,
    5000.99
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo 'Secesso :)';
} else {
    echo "Erro: "  . $conexao->error;
}


$conexao->close();