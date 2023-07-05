<div class="titulo">Argumentos Variáveis</div>

<?php 
function soma($a, $b) {
    return $a + $b;
}


echo soma(14, 15,) . '<br>';
/* 
    Pode até passar mais argumentos mas vai pegar
    apenas os dois primeiros!!
*/
echo soma(6, 5, 4) . '<br>';


/* 
    Argumentos variáveis ​​são definidos usando o operador "..."
    Quando a função é chamada, você pode passar qualquer número de 
    argumentos separados por vírgulas, e eles serão empacotados em um 
    array dentro da função.
*/

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);


/* 
    OBS: note que nesse caso foi utilizado o 
    operador "..." no array como argumento. o que 
    acontece e que eu passo os valores desse array e
    não o array em si. Caso isso não ocorresse eu 
    iria ter uma $array  dentro de uma array $numeros
*/
$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);


/* 
    Pode ter parâmetros normais com parâmetro
    variáveis. o ultimo tem que ser parâmetro variável
*/

function membros($titular, ...$depedentes) {
    echo "titular: $titular <br>";
    if($depedentes) {
        foreach($depedentes as $dep) {
            echo "Depedentes: $dep <br>";
        }
    }
}

echo '<br>';
membros('Felipe', 'Glenda', 'Jean', 'Cleubi', "Lucas");
membros('Glenda');