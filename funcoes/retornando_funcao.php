<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
    return function($b) use ($a) {
        return $a + $b;
    }; 
}

echo soma(13)(3);

$doisMais = Soma(2);

echo '<br>';
echo $doisMais(15);
echo '<br>';

$arr = [
    1,
    2,
    [
        3,
        4,
        5,
        6
    ],
    7,
    8,
    [
        9,
        [
            10,
            11
        ]
    ]
];


function verArray($array, $nivel = '>') {
    foreach($array as $valores) {
        if(is_array($valores)) {
            verArray($valores, $nivel . $nivel[0]);
        } else {
            echo "$nivel $valores <br>";
        }
    }
}

echo verArray($arr);




