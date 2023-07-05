<div class="titulo">Operações</div>

<?php
/* 
    Uma outra forma de cria Array é usando [] (Cochetes) 
    $dados_1 = [Elementos]; vs $dados_1 = array(Elementos);

*/

$dados1 =  [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Brasileiro"
    
];

$dados2['endereco'] = 'Rua A';

/* 
    Soma de array você pode fazer dessa forma!! :)
*/

/* 
    OBS: Caso tenha conflito de chaves 
        
        $dados1 =  [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Brasileiro",
        ----"nome" => "Felipe"------
    ];


    $dadosCompletos = $dados1 + $dados2;
      
    ----Uma vez que ele já tenha a chave ele vai acabar deixando entao vai fica 
    "nome" => "Jose"-----
*/

$dadosCompletos = $dados1 + $dados2; // Tomar cuidado com dados com a mesma chave!! :0

print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // PHP DOC: is_array() — Verifica se a variável é um array
echo '<br>' . count($dadosCompletos);// PHP DOC: count() — Conta o número de elementos de uma variável, ou propriedades de um objeto

echo '<br>';
$indice = array_rand($dadosCompletos); // PHP DOC: Escolhe uma ou mais chaves aleatórias de um array
echo "$indice = $dadosCompletos[$indice]" ;
echo '<br>';
echo "{$dadosCompletos['idade']}"; 
/*
 "$dadosCompletos['idade']" Dessa forma não consegue interpolar a variavel
  tem que delimitar com o par de '{}' para dizer exatamento o que quer que seja
  interpolado. 

*/
//echo "${dadosCompletos['idade']}"; // O uso de ${} em strings está obsoleto

unset($dadosCompletos["nome"]); // PHP DOC: unset() — Destrói a variável especificada
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); 
echo '<br>';
var_dump($dadosCompletos);


/*
 Ira parecer só os numeros Impares por conta do coflito de indices
 Não sobescreve o indice
*/

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimas = $impares + $pares;
echo '<br>' . $decimas;
print_r($decimas);

$decimas = array_merge($impares, $pares); // PHP DOC: array_merge() — Combina um ou mais arrays
/* 
    Se os arrays dados têm as mesmas chaves "string", então o último valor para uma chave irá sobrescrever o valor anterior. 
    Se, no entanto, os arrays tem as mesmas chaves numéricas, o último valor para uma chave não sobrescreverá o valor original, 
    e sim adicionado ao array resultante. 
*/
echo '<br>' . $decimas;
print_r($decimas);

sort($decimas); // PHP DOC: sort() — Ordena um array
/* 
    Essa função ordena um array. Os elementos serão ordenados do menor para o maior
    ao final da execução dessa função. 
*/
echo '<br>' . $decimas;
print_r($decimas);
