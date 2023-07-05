<div class="titulo">Break/Continue</div>

<?php

/* 
    DOC PHP:  (break) finaliza a execução da estrutura for, foreach, while, 
    do-while ou switch atual. break aceita um argumento numérico opcional 
    que diz quantas estruturas aninhadas deverá interromper. 
    O valor padrão é 1, somente a estrutura imediata é interrompida. 
*/
$cont = 16;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;
    }
}

echo '<br><hr>';

/* 
    DOC PHP: (continue) é utilizado em estruturas de laço para pular o resto 
    da iteração atual, e continuar a execução na validação da condição e, 
    então, iniciar a próxima iteração.
*/

for(;;) {
    $cont++;
    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}


echo '<hr>';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, ];

foreach($arr as $valor) {
    if($valor === 8) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo 'Fim!';



