<div class="titulo">Map & Filter</div>

<?php 
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota); // DOC PHP: round() — Arredonda um float
}

print_r($notasFinais1);

echo '<br>';
$notasFinais2 = array_map('round', $notas); 
/* 
    DOC PHP: array_map() — Aplica uma função em todos os elementos dos arrays dados
    OBS: A função passado com argumento tem que está entre '' (Parênteses).
*/
print_r($notasFinais2);

/* ----------------------------------------------------------------------------- */



$apenasAprovados = [];
foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasAprovados[] = $nota;
    }
}

echo '<br>';
print_r($apenasAprovados);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasOsAprovados2 = array_filter($notas, 'aprovados');
/* 
    DOC PHP: array_filter() — Filtra elementos de um array utilizando 
    uma função callback.
*/
print_r($apenasOsAprovados2);

/* ----------------------------------------------------------------------------- */



function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);
