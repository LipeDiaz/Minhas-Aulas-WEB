<?php

function novaConexao($banco = 'curso_php') {
    $servido = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servido, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}