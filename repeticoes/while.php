<div class="titulo">While/Do While</div>

<?php 
const VALOR_LIMITE = 5;
$contador = 0;

/*  
    While tem uma unica expressão
*/

while($contador < VALOR_LIMITE) {
    echo "While $contador <br>";
    $contador++;
}

/* 
    Do While. unica estrutura que tem ";" no final é ela é executada antes 
    do teste lógico dessa forma uma execução é garantida. 
*/

$contador = 100;

do {
    echo "$contador <br>";
    $contador++;
} while($contador < 10);


/* 
    While infinito, usando o break pra sair do laço.
*/

$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}







