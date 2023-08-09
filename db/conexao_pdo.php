<?php

function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'root';

    try {
        $conexao = new PDO("mysql:dbname=$banco;host=$servidor",
            $usuario, $senha);
        return $conexao;
    }catch (PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
   
}

