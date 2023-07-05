<div class="titulo">Traits #01</div>

<?php 

/* 
    "traits" são mecanismos de reutilização de código 
    que permitem que um conjunto de métodos sejam compartilhados 
    entre diferentes classes.
*/

trait validacao {
    public $a = 'Valor a';
    
    public function validarString($str) {
        return isset($str) && $str !== '';
    }

}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
        /* 
            DOC PHP: trim() — Retira espaço no início e 
            final de uma string
        */
    }

}

class Usuario {
    use validacao, validacaoMelhor; // Forma de se utilizar traits em classes 

    public function imprimirValorC() {
        echo '<br>' , $this->c;
    }
}

// var_durmp(validação->validarString('')) // não se acessa traists diretamente

$usuario = new Usuario(); 
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(''));
echo '<br>';
echo $usuario->a,"<br>",$usuario->b;
echo $usuario->imprimirValorC();

echo $usuario->mostrar();
//echo $usuario->d;



