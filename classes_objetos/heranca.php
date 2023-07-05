<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo ' Pessoa Criada!!<br>';
    }

    function __destruct() {
       echo 'Pessoa diz: Tchau'; 
    }

    public function apresenatr() {
        echo "{$this->nome} {$this->idade} anos<br>";
    }
}

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
        echo 'Usuario Criado!!<br>';
    }

    function __destruct() {
        echo 'Usuario diz: Tchau';
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
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos";
    }
}


$usuario = new Usuario('Felipe Dias', 24, 'lipeDiaz');
$usuario->apresentar();

