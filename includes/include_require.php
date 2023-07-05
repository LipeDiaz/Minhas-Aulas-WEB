<div class="titulo">Include vs Require</div>

<?php 
/* 
    DOC_PHP: ini_set — Define o valor de uma opção de configuração
*/
ini_set('display_errors', 1);  

echo 'Usandoo include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');

echo 'Usandoo include com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo....<br>';