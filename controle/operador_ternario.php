<div class="titulo">Operadore Ternário</div>

<?php
$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

/* -------Operador Ternario é dividido em 3 partes------ */

$idade = 14;
/*-----------1ªParte----------2ªParte-----------3ªParte-----*/
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

/* --------------------------------------------------------------------------------------------------------- */
$idade = 70;
/* Um operador ternário dentro do outro, só pra mostra que e possivel :) */
/*-----------------------($$$$$$$$$1ªparte da expressão maior.$$$$$$$$$$)----------------- */
/*---------1ª expressão---2ª expressão----FAz parte 2ª-----FAz parte 2ª--------FAz parte 1ª */
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de idade') : "Menor de idade";
echo "$status<br>";

