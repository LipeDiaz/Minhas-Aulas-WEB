<div class="titulo">Conversões</div>

<?php
echo var_dump(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
echo var_dump(1 + 1.0);
echo '<br>';
echo var_dump((float) 3);

// float para int 
echo '<p>FLoat para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump((intval(2.999))); // Dar o numero inteiro
echo '<br>';
var_dump((int) round(2.8)); // Aredonda e mudar de 'float' p/ 'inteiro' 

// Operação com string
echo '<p>String</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("2" + 3);
echo '<br>';
var_dump("3" . 5);
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" + 2); // False
echo '<br>';
//var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
//var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "2+5"); // Depois que chega no "+" para de procurar
echo '<br>';
var_dump(1 + "2.5");
echo '<br>';
var_dump(1 + -3.2e2);
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");


