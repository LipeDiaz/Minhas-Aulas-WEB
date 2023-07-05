<div class="titulo">Closure & Callble</div>

<?php 
/* 
    OBS: Quando for uma função anônima na sua sintaxe no final 
    deve-se colcar ";"
*/
$soma1 = function($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';


echo soma2(2, 4) . ' ';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';


var_dump($soma1);

function executar1($a, $b, $op, callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
echo executar1(2, 3, '+', $soma1);
echo executar1(2, 3, '+', 'soma2') . '<br>';


function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo executar2(100, 100, '+', $soma1);
// A linha 44 não vai funciaonar porque o tipo na função e Closure na 
//linha 36
//echo executar2(3000, 3000, '+', 'soma2') . '<br>'; 

/* 
    Definição de dois termos utilizados nessa aula 
    Callable: Termo utilizado para algo que pode ser 
    invocado assim como uma função.
    Closure: Termo utilzado para funções anônimas 
*/

/* 
    A função "is_callable()" retorna se algo pode ou não ser 
    chamado.
*/

