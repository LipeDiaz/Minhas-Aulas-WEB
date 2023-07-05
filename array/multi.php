<div class="titulo">Multidimensionais</div>

<?php 
$dados = [
    [
        "nome" => "Felipe",
        "idade" => 24,
        "naturalidade" => "Brasileiro"
    ],
    [
        "nome" => "Glenda",
        "idade" => 26,
        "naturalidade" => "Brasileira"
    ]
];

echo '<br>' . $dados[0]['nome'];
echo '<br>' . $dados[1]['nome'];

/* Adicionando mais 1 array dentro de $dados */
$dados[] = [
    "nome" => "Cleubi",
    "idade" => 45,
    "naturalidade" => "Francesa"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['nome'];
echo '<br>' . $dados[1]['idade'];

/* Adicionando elementos mais internos */
echo '<br>';
$dados[1]["end"] = "Rua A";
print_r($dados[1]);

/* Removendo um elemento */
unset($dados[0]); // O índeci é '0' sera destruido e não reorganizara os demais
echo '<br>';
print_r($dados);

echo '<br>';
var_dump($dados[0]); // Retorna NULL




