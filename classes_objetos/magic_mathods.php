<div class="titulo">Métodos Mágicos</div>

<?php

/* 
    Métodos mágicos são métodos especiais que sobrescrever o comportamento 
    padrão do PHP quando certas operações são realizadas em um objeto.
*/
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    /* 
        Quando um objeto de uma classe é criado em PHP, ele pode ter o método 
        __destruct() definido. Esse método é chamado automaticamente pelo interpretador 
        PHP quando o objeto é destruído ou quando a referência a ele é removida.
    */
    function __destruct() {
        echo 'E morreu!!';
    }

    /* 
        O método __toString() permite que uma classe decida como se comportar 
        quando convertida para uma string. Por exemplo, o que echo $obj; irá 
        imprimir
    */
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar() {
        echo $this . '<br>';
    }
    
    public function __get($atrib) {
        echo "Lendo atributo não declarado {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método '{$metodo}'";
        echo "<br>com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Felipe', 24); // __construct
$pessoa->apresentar(); // chamnedo o __toString
echo $pessoa, '<br>';// chamnedo o __toString
$pessoa->nome = 'Diaz'; 

//chama o método diretamente sem o __call
$pessoa->apresentar();

$pessoa->nomeCompleto = "Muito Legal"; // __set
$pessoa->nomeCompleto; // __get

//acesando o atributo diretamente sem o __get
echo $pessoa->noem; 

//call porque o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]); 

$pessoa = null; // __destruct