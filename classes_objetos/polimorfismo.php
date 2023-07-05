<div class="titulo">Polimorfismo</div>

<?php

/* 
    Polimorfismo é um conceito fundamental da programação orientada a objetos 
    (POO) em PHP e em muitas outras linguagens de programação. Ele permite que 
    objetos de diferentes classes sejam tratados de forma uniforme, mesmo que 
    tenham estruturas e comportamentos diferentes.

    Características do polimorfismo em PHP:

    Polimorfismo de Sobrecarga: Permite que uma classe tenha múltiplos métodos 
    com o mesmo nome, mas com assinaturas diferentes (ou seja, número ou tipo de 
    parâmetros diferentes). Isso permite que uma classe tenha comportamentos 
    diferentes com base nos argumentos passados para o método.

    Polimorfismo de Sobrescrita: Permite que uma classe filha substitua o comportamento 
    de um método da classe pai com o mesmo nome e assinatura. Isso permite que as 
    classes filhas forneçam implementações específicas para os métodos herdados 
    da classe pai.

    Objetivo do polimorfismo em PHP:

    O objetivo do polimorfismo é promover a reutilização de código e a flexibilidade 
    do design de software. Com o polimorfismo, é possível escrever código que 
    possa ser aplicado a objetos de diferentes classes, desde que atendam a uma 
    interface ou compartilhem um contrato específico. Isso permite que as 
    classes sejam intercambiáveis em diferentes contextos, tornando o código 
    mais modular e extensível.

    Em resumo, o polimorfismo em PHP permite que objetos de diferentes classes 
    sejam tratados de forma uniforme, permitindo a reutilização de código e a 
    flexibilidade do design de software. Ele é alcançado por meio de técnicas 
    como sobrecarga e sobrescrita de métodos.
*/

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozAGrega extends Arroz {

}
 
class Feijao extends Comida {

}

class Sorvete extends Comida {
     
}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
    
        
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega();
$c2->peso = 0.25;

$c3 = new Sorvete();
$c3->peso = 1.5;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);
$p->comer($c3);

echo $p->peso;



/* 
----------- FEITO POR MIM!! ----------------
    $pesoComidas = [$c1, $c2, $c3];

    foreach ($pesoComidas as $peso) {
        $pesoAgora = $p->comer($peso);
        echo $p->peso . '<br>';
    }
*/



/* 
    --------- FEITO POR MIM !! -------------

    abstract class Curso {
        public $preco;
        public $tempoDuracao;

        abstract public function descricao($curso);
    }


    class Informatica extends Curso {
        public function descricao($curso) {
            return "{$curso}: P: ". $this->preco . "T: ". $this->tempoDuracao;
        }
    }


    class Enfermagem extends Curso {
        public function descricao($curso) {
            return "{$curso}: P: ". $this->preco . " T: ". $this->tempoDuracao;
        }
    }

    echo '<br>';

    $curso1 = new Informatica();
    $curso1->preco = 300;
    $curso1->tempoDuracao = 1000;
    echo $curso1->descricao('Informática');

    echo '<br>';

    $curso2 = new Enfermagem();
    $curso2->preco = 500;
    $curso2->tempoDuracao = 1200;
    echo $curso2->descricao('Enfermagem'); 

*/

echo '<br>';
$idade = 20;

if (!($idade >= 18)) {
    echo "Você não tem idade suficiente para votar.";
} else {
    echo "Você tem idade suficiente para votar.";
}