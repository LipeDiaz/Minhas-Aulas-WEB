<div class="titulo">Desafio Impressao</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contém índice par
- Resolva com for e foreach
- Valores esperado : AAA, CCC, EEE
-->

<?php

/* Feito por mim!!! Deu certo de primeira :) :) */

/*
    $array = [
        1 => "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];





    for($i = 1; $i < count($array); $i++) {
        if($i % 2 === 0) {
            continue;
        }
        echo "{$array[$i]} <br>";
    }

    echo '<hr>';

    foreach($array as $indice => $valor) {
        if($indice % 2 === 0) {
            continue;
        }
        echo "{$array[$indice]} <br>";
    }

*/

/* -------------------------------------------- */

/* Algoritimo da aula */

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0;$i < count($array);$i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}

echo "<br>";

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}

/*
 Uma duvida? 1 % 2 

 No caso de 1 % 2, 1 é menor do que 2, portanto a divisão resulta em 0 
 com resto 1. O valor retornado pela expressão 1 % 2 é, portanto, 1.

 Se utilizarmos o operador / em PHP, ele realiza uma divisão normal 
 entre dois números e retorna o resultado como um número de ponto flutuante.

*/

