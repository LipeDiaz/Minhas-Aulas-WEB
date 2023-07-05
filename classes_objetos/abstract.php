<div class="titulo">Classe Abstarct</div>

<?php 
/* 
    DOC PHP: O PHP possui métodos e classes abstratas. Classes definidas 
    como abstratas não podem ser instanciadas, e qualquer classe que contenha 
    ao menos um método abstrato também deve ser abstrata. Métodos são definidos 
    como abstratos declarando a intenção em sua assinatura, e não podem definir 
    a implementação.    

    Quando herdando de uma classe abstrata, todos os métodos marcados como 
    abstratos da classe herdada precisam ser definidos na classe implementante.
*/

abstract class Abstrata {
    public abstract function metodo1();
    /* 
        public ou abstract você escolhe quem 
        fica na frente ou atrás 
    */
    abstract protected function metodo2($parametro);
}


abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}


class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo 'Executando o metodo 1 extendido<br>';
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Execuntando método 2, com parametro $parametro";
    }

    public function metodo3() {
        echo "Execuntando método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
/*
    $c->metodo2('externo'); Não se pode acessar um metodo marcado como 
    PROTECTED diretamente.
 */
$c->metodo3();

echo "<br>";
var_dump($c);

echo "<br>";
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);