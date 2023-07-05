<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.5, 'texto');
echo $lista . '<br>'; // Vai printar array e não mostra seu contéudo
var_dump($lista); // Uma das formas de mostra o conteudo de uma array
echo '<br>';
print_r($lista); // PHP DOC : Imprime informação sobre uma variável de forma legível 


echo '<br>';
$lista[1] = 100; // Mudando o valor do  índice "1"
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]); // Retorna vazio NULL

/* Poder acessar Strings dessa forma por índece */
$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // Cuidado!!
echo '<br>' . mb_substr($texto, 10, 1);

