<div class="titulo">Função & Escopo</div>

<?php
function imprimirValor() {
    echo 'Ola! ';
    echo 'Até a próxima ! <br>';
}

imprimirValor();
imprimirValor();
imprimirValor();


echo "<hr>";

$variavel = 1;

function trocarValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

echo "<hr>";

function trocarVariavelDeVerdade() {
    global $variavel; 
    /* 
    "Global" palavra reservada para acessar variavel
    fora do escopo de função    
    */
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarVariavelDeVerdade();
echo "Depois: $variavel <br>";


var_dump(trocarVariavelDeVerdade());