<div class="titulo">Operadores Relacionais</div>

<?php 
// ---------------Operadores relacionais--------------------------
var_dump(1 == 1); // Retorna true "==" (Sinal de Igual)
var_dump(1 > 1); // False
var_dump(1 >= 1); // True
var_dump(4 < 23); // True
var_dump(1 <= 7); // True
var_dump(1 != 1); // False "!=" (Sinal de diferente)
var_dump(1 <> 1); // False "<>" (Sinal de diferente)

var_dump(111 == '111'); // True
var_dump(111 === '111'); // False "===" (Igualdade estrita) Tipos diferente
var_dump(111 != '111'); // False
var_dump(111 !== '111'); // True "!==" (Diferença estrita)

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 66;

if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

echo "<p class='divisao'>Spaceship</p><hr>";
// Operador "Spaceship"
// Operando <=> Operando 
// Rotorna (1), (0) ou (-1)
// (1) Quando operandor esquerdo e maior
// (0) Quando operandor são iguais
// (-1) Quando operandor direito e maior
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5); // True
var_dump(!!0); // False
var_dump(!!"");  // False
var_dump(!!" "); // True

