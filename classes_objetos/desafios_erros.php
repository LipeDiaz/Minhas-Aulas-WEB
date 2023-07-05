<div class="titulo">Desafio Erros</div>

<?php 
interface Templete {
    public function metodo1();
    public function metodo2($parametro);
} 

abstract class ClasseAbstrata implements Templete {
    public function metodo3() {
        echo "Estou funcionando";
    }

} 

class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }

    public function metodo1() {

    }
    
    public function metodo2($parametro) {

    }

} 

$exemplo = new Classe('..');
$exemplo->metodo3();

