<div class="titulo">Dasafio String</div>

<?php

// Enuciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

$nome = '!AbcaBcabc'; 


echo strpos($nome, 'abc') . '<br>';
echo stripos($nome, 'abc') . '<br>';
