<div class="titulo">Modificaddor Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo "não vou mudar!!<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando o metodo 1<br>';
    }    

    //public function metodo2() {
    //    echo 'Extendendo método 2<br>';
    //}
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor Único';
}

$unica = new  Unica();
echo $unica->attr;

/* 
    Não se pode gerar uma herança a partir de uma classe marcada como "final"
*/
 
//class Duplicata extends Unica {
//    public $attr2;
//}

