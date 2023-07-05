<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Varialve de instacia';
    public static $static = 'Varialve de classe (estatica)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        /* 
            echo "Estática = {$this->static}"; 
            Não se acessa com o '$this' uma propriedade ou funçao marcado 
            com Static.
        */
        // Tentativa 2
        /* 
            echo "Estático = {self::$tatic}<br>" 
            Não consigo usar o delimitador de string {} acessando uma 
            propriedade usando o self::
        */
        echo "Estático = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estático = {$this->naoStatic}<br>"
        /* 
            Em uma funçao marcado como static não consigo acessa um 
            propriedade usando o $this
        */
        // echo "Estático = {$static}<br>"
        echo "Estático = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // Não é a forma ideal 
/* 
    $objetoA->mostrarStaticA(); Eu Posso acessar um função static dessa forma,
    mas, não é o mais interresante porque parece que que a função pertence ao
    objeto, quando pertece a classe.

    Logo a forma de se acessar e colocar a classse que a função pertence exemplo
    A::mostrarStaticA() 

    O operador "::" em PHP é chamado de operador de resolução de escopo ou 
    operador de paquímetro. Ele é usado para acessar membros estáticos, 
    constantes e sobrescritos de uma classe.

*/
echo '<br>';
echo A::$static, "<br>"; // Acessar diretamente pela classe 
A::mostrarStaticA(); // Acessar diretamente pela classe 

/* 
    Posso alterar o membro de classe assim com se altera membro de estancia
*/

echo A::$static = 'Alterando membro de classe!';
A::$static; 