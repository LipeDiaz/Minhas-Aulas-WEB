<div class="titulo">Anônimais</div>

<?php 
/* 
    OBS: Devido essa sintaxe ser diferente de uma função 
    tem que se colcar ';' no final....
*/
$soma = function($a, $b) {
    return $a + $b;
};

/* 
    Essa é a forma de chamar a função que etsá armazenada em uma variálvel.
    "Função essa anônima"
*/
echo $soma(2, 9) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao =  function($a, $b) {
    return $a *  $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao($a, $b) {
    return $a / $b;
}

/* 
    Note que essa função esta entre '' (Parênteses)
    a função "divisão" está na sua forma comum. 
*/
executar(9, 3, '/', 'divisao');

executar(2, 100, '*', $multiplicacao);
























