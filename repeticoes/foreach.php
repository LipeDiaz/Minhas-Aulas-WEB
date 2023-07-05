<div class="titulo">Foreach</div>

<?php

/* 
        DOC PHP : sintaxes:

    foreach (iterable_expression as $valor)
        statement
    foreach (iterable_expression as $chave => $valor)
        statement


*/

$array = [
    'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta',
    'Quinta', 
    'Sexta', 
    'Sabado'
];

foreach($array as $valor) {
    echo $valor . '<br>';
};

echo '<hr>';

foreach($array as $indice => $valor) {
    echo "$indice = > $valor <br>";
};
/* ------------------------------------------------- */

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>';

foreach($matrix as $linhas ) {
    foreach($linhas as $valores){
        echo "$valores ";
    }
    echo '<br>';
};

/* Usando referências "&" */

$numeros = [1, 3, 4, 6, 7, 10];

foreach($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar ";
};

echo '<br>';
print_r($numeros); // O valor foi passado por referência então p array muda

