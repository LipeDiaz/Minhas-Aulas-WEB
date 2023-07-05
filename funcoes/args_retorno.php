<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMenssagem() {
    return 'Seja bem vindo(a)!';
}

obterMenssagem(); 
/* 
    Nesse caso ele não vai imprimir;
    pq ele está retornando um valor então
    vai precisar do "echo" 
*/

$mens = obterMenssagem();
echo "<br>", obterMenssagem();
echo "<br>";
var_dump(obterMenssagem());

function obterMemsagemComNome($nome) {
    return "Olá, {$nome}!";
}

echo '<br>', obterMemsagemComNome('Felipe');
echo '<br>', obterMemsagemComNome('Glenda');

function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y =5;
echo '<br>', soma(10, 4);
echo '<br>', soma(45, 46);

/* 
    Testando se a passagem de valor na funçãoe e 
    pro referência ou valor. Passagem por valor!!!
*/


function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>' , $variavel;

/* 
    Para alterar o valor da variavel no exmplo a baixo
    ela tem que ser passada por referência.
*/

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 7);
echo '<br>', $variavel;