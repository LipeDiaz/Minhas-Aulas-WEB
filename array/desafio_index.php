<div class="titulo">Desafio Index</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

/*  Array( 
    [0] => 8, 
    [4] => 2, 
    [3] => 3, 
    ['a'] => 4, 
    [1] => 5, // Errei aponta pro 5 [5]  => 5 pq o índece anterior e '4'
    ['9'] = > 6,
    ['06'] => 7

) */
print_r($lista);

