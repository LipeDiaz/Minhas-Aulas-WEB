<div class="titulo">Tipo Booleano</div>

<?php

echo true; 
echo '<br>';
echo FALSE;

// Booleano é case-insensitive

echo '<br>' . var_dump(true); 
echo '<br>' . var_dump(False); 
echo '<br>' . var_dump('flase'); 
echo '<br>' . is_bool(false); // A Função "is_bool()" Verifica se o parametro e 'true' ou 'false'.
echo '<br>' . is_bool('true'); 

// Fazer as regras de conversões
echo '<p>Regras:</p>'; 
echo '<br>' .  var_dump((bool) 0); // Apenas zero é false
echo '<br>' .  var_dump((bool) 20);
echo '<br>' .  var_dump((bool) -1);
echo '<br>' .  var_dump((bool) 0.0);
echo '<br>' .  var_dump((bool) 0.0000000001);
echo '<br>' .  var_dump((bool) ""); // false
echo '<br>' .  var_dump((bool) "0"); // false
echo '<br>' .  var_dump((bool) " "); // todo resto é true
echo '<br>' .  var_dump((bool) "00");
echo '<br>' .  var_dump((bool) "false");

echo '<br>' .  var_dump(!"false");

// "!" (Ponto de esclamação) Negação logica!!  !True = False
