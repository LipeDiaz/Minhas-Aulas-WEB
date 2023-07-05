<div class="titulo">Arrays Constantes</div>

<?php
/* 
    Uma array constante depois que definida
    Pode apenas ler seu elementos
    OBS: Em algumas lingugem pode ter comportamentos diferentes.
*/

const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS[0] = 'Banana';
// FRUTAS[] = 'Banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];