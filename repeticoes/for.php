<div class="titulo">Laço For</div>

<?php
/* 
    A estrutura do laço 'for' e dividido em 3 partes 
    for(cont => 0;cont <= 5; cont++)
       (    1º   ;    2º   ;   3º  )
    1ª inicialização
    2ª Condição
    3º incremento/decremento

    Onde:

    inicialização: é a expressão que é executada apenas uma vez, no início do
    laço, e serve para inicializar a variável de controle do laço.

    condição: é a expressão que é testada a cada iteração do laço. Se a condição 
    for verdadeira, o código dentro do laço é executado. Se a condição for falsa, 
    o laço é interrompido e a execução continua na linha seguinte ao laço.

    incremento/decremento: é a expressão que é executada a cada iteração do 
    laço, após a execução do código dentro do laço. Geralmente é usada para 
    incrementar ou decrementar a variável de controle do laço.


*/

for($cont = 0; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';


/*
    Não e necessario ter as 3 partes
    OBS: $conte = 5 
 */
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';

/* 
Partes da estrutura podem ir no 
corpo do for 
*/
for(;$cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

echo '<hr>';

/* 
    Percorrendo uma array!!
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

print_r($array);

echo '<hr>';

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

/* 
    Percorrendo uma array multidimencional 
    Um for dentro de outro!!
*/

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>'; 

for($i = 0;$i < count($matrix); $i++) {
    for($in = 0; $in < count($matrix[$i]); $in++) {
        echo "{$matrix[$i][$in]} ";
    }
    echo '<br>';
};


$arrayT = [
    [1, 2 ,3 ,4 ,5, 6],
    [7, 8 ,9 ,10 ,12, 13],
    [14, 15 ,16 ,17 ,18, 19],
];

/* MEu Exemplo!!!! */

echo '<br>';

for($e = 0; $e < count($arrayT); $e++ ) {
    for($i = 0; $i < count($arrayT[$e]); $i++) {
        echo "{$arrayT[$e][$i]} ";
    }
    echo '<br>';
}



