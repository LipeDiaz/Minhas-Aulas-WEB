<?php
echo 'Carregando: Include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b ;
    }
}

