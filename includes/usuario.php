<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade); 
        /* 
            Estou usando a palavra-chave "parent::" para usar os a função
            da classe pai.
        */
        $this->login = $login;
    }


    public function apresentar() {
        /* 
            Uma outra possibilidade é usar o "apresentar() da SuperClasse"
            que seria usar "parent::apresentar()"

            Ficaria assim:
            parent::apresenta();
            echo "@{$this->login}:"

            O resultado seria o mesmo!!!!
        */
        $login = "@{$this->login}: ";
        return $login . parent::apresenatr();
    }
}
