<div class="titulo">Argumentos Padrão</div>

<?php
/* 
    Quando não é se passado nada nos argumentos você
    pode colocar parâmetros padrões 
*/

function saudacao($nome = 'Senhor (a)', $sobrenome = 'Cliente') {
    return "Bem Vindo, $nome $sobrenome! <br>";
}


echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Felipe', 'Diaz');

/* 
    OBS: O argumento padrão e preferivel que coloque como
    ultimo dos argumentos.
*/

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Amburgue');
anotarPedido('Pizza', 'Refrigerante');

/* 
    Se o valor padrão ficar em primeiro você sempre terá
    que colocar o segundo argumento
*/
function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido2('Refrigerante2', 'Pizza2');