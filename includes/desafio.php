<div class="titulo">Desafio do Módulo</div>
<?php

ini_set('display_errors', 1);


$usuario = new Usuario('Felipe Dias', 24, 'lipeDiaz');
echo $usuario->apresentar();
