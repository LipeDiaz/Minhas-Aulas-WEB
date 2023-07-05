<div class="titulo">Visibilidade</div>

 <?php 
 class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Público = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    } 

    protected function vaiPorHeranca() {
        echo 'Serei trasmitido por herança!<br>';
    }

    private function naoMostrar() {  
        /* 
            Só faz sentido ter uma função private se for chamar em outras
            funções 
        */
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar(); Pivate não se passa por herança

Class B extends A {
    public function mostrarB() {
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";
        /* 
            Propriedades e metodos não poder ser passado por herança
        */

        parent::vaiPorHeranca();
    }
}

echo '<br>';

$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca(); Métodos ou Propriedades marcados como Private não 
//                      podem ser acessado diretamente 