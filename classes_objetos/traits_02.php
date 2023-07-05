<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }

}


class Usuario {
/*
    Em PHP, quando duas traits possuem métodos ou propriedades com o mesmo 
    nome, ocorre um conflito de traits. Existem algumas maneiras de solucionar 
    esse conflito:
    
    Renomeie o método ou a propriedade em uma das traits: Se o método ou a 
    propriedade em conflito não precisa ter o mesmo nome em ambas as traits, 
    renomeie um deles em uma das traits.
    
    Use o operador "insteadof" para resolver conflitos de métodos: O operador 
    "insteadof" permite que você especifique qual método deve ser usado quando 
    há um conflito. Você pode usar o operador "insteadof" no bloco "use" que 
    importa a trait em sua classe.
*/
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadof validacao;
        // Ou poderia fazer ao contrario
        // validacao::validarString insteadof validacaoMelhor;

        validacao::validarString as validacaoSimples;
        /* 
            O que aconteceu foi que eu alterei o nome do método dessa forma 
            em cima com "as" 
        */
    }

}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));


