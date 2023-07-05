<div class="titulo">$_GET</div>

<?php
/* 
    O $_GET é formado pelos parâmetros que vem na requisição 'Tipo Get'
    ? Os parâmetro vem depois da URl separqado por "?"
    & Serve para separar os parâmetros
    Ex: localhost:8080/exercicio.php?nome=Felipe&senha=1234
*/
echo $_GET . '<br>';
print_r($_GET);


