<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function apresenatr() {
        return "{$this->nome} {$this->idade} anos";
    }
}