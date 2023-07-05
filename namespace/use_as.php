<?php namespace Outro\Nome; ?>
<div class="titulo">Use\As</div>

<?php 
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b;
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . 
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

/* 
    O "use" é uma instrução utilizada para importar namespaces ou classes 
    em um determinado arquivo PHP. É possível utilizar o "use" para importar 
    um namespace inteiro ou apenas uma classe específica. Quando você importa 
    um namespace com o "use", você pode referenciar as classes desse namespace 
    sem precisar utilizar o nome completo do namespace em cada chamada.

    Já o "as" é utilizado para atribuir um alias ou apelido a um namespace ou 
    classe importado com o "use". Isso é útil quando você precisa importar 
    duas classes com o mesmo nome em um mesmo arquivo PHP, por exemplo. Nesse 
    caso, você pode atribuir um alias a uma das classes para evitar conflitos  
    de nome.
*/

use const Nome\Bem\Grande\constante;  
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(1, 3) . '<br>';
echo ctx\soma(1, 3) . '<br>';

// use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 212) .  '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();