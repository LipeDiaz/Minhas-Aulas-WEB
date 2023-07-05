<div class="titulo">Desafio do Módulo</div>

<?php

include_once('t1.php');
include_once('t2.php');

function soma() {
    echo 'função de somar do "desafio"<br>';
}

function subtrair() {
    echo 'função de subtrair do "desafio"<br>';
}

const const1 = '123 do desafio<br>';
const const2 = '"Olá" do desafio<br>';

echo soma();
echo subtrair();
echo const1;
echo const2;

echo '<hr>';


use Fun as somar1;

echo somar1\soma();
echo \Fun\subtrair();
echo \Fun\subtrair();
echo const1;
echo const2;

use Minhas\Const as mec;
echo mec\const1;
echo \Minhas\Const\const2;





