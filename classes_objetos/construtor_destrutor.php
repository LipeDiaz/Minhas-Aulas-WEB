<div class="titulo">Costrutor e Destrutor</div>

<?php 

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18) {
        echo "Construtor invocado! <br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu!<br>";
    }

    public function apresentar()  {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
    
}

// $pessoa = new Pessoa(); "Não posso mais estância sem os parâmetros"

$pessoaA = new Pessoa('Felipe', 24);
$pessoaA->apresentar(); 
unset($pessoaA);

$pessoaB = new Pessoa('Diaz');
$pessoaB->apresentar(); 
$pessoaB =  null;







