<div class="titulo">Include Once</div>

<?php

/* 
    O include_once tem a mesma função que o include, mas com a diferença de que o include_once verifica se o 
    arquivo já foi incluído anteriormente no script atual e, se já tiver sido incluído, ele não será incluído 
    novamente. Isso evita erros de redeclaração de funções ou classes que podem ocorrer quando o mesmo arquivo 
    é incluído várias vezes.
*/

ini_set('display_errors', 1);

include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Váriavel = '{$variavel}'.<br>";
$variavel = 'Váriavel Alterada';
echo "Váriavel = '{$variavel}'.<br>";

/* 
    Nesse momento em que chamo o include ele reinicia a váriavel
*/
include('include_once_arquivo.php'); 
echo "Váriavel = '{$variavel}'.<br>";
$variavel = 'Váriavel Alterada';
echo "Váriavel = '{$variavel}'.<br>";


/* 
    Usando o include_once ou require_once mais de uma vez, ele não carrega 
    novamente como o include ou require sendo assim não precisando fazaer a proteção
    de chamar a função novamente.
*/
include_once('include_once_arquivo.php'); 
echo "Váriavel = '{$variavel}'.<br>";

require_once('include_once_arquivo.php'); 
echo "Váriavel = '{$variavel}'.<br>";