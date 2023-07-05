<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for($i = 1;$i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

/* 
    Conceito de Recursividade:
    refere-se à capacidade de uma função se chamar 
    novamente (a si própria) dentro do seu próprio 
    corpo.
*/

function somaRecursivaUmAte($numero) {
    // Condição de Parada!!!!
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(10) . '<br>';

/* 
    Usando a recursividade com operador ternário 
*/

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : 
    $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(10) . '<br>';



/* 
    Calculando 5! (Cinco fatorial)
*/


function fatorial($num) {
    if($num === 1) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}

echo fatorial(5);















