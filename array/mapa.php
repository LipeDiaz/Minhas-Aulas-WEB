<div class="titulo">Mapa</div>

<?php
/* ----------------Adicionando os índices "Chaves"----------------- */
$dados = array( // Pode organizar dessa forma ou colocar tudo em uma mesma linha!!
    "idade" => 25,
    "cor" => "Vermelho",
    "peso" => 65.100
);

print_r($dados);
echo "<br>";

var_dump($dados[0]); // Ao adicionar chaves não se obtém dados por índeces mais. "VALOR NULL"
echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];
echo '<br>';
var_dump($dados["outra_informacao"]); // Não da erro retorna NULL


/* Não é interesante mesturar os índece com chaves */
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g", // Recebe o índece "10" não recebe '7' pq não retrocede
    8 => "h" // OBS: tem o mesmo índece do valor "D" só que o "H" vai sobrescrever
);

echo '<br>';
print_r($lista);

/* Adicionando valores */
$lista[] = "i"; // Dessa forma a valor é o ultimo da lista
echo '<br>';
print_r($lista);

$lista['vinte'] = "j"; // Adicionando valor com sua chave
echo '<br>';
print_r($lista);


