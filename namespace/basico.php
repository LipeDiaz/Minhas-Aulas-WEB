<?php namespace contexto;?>

<!-- 
    Namespaces são declarados usando a palavra-chave "namespace". Um arquivo contendo um namespace 
    deve declarar o namespace no início do arquivo antes de qualquer outro 
    código - com uma exceção: a palavra-chave declare. 
-->
<div class="titulo">Exemplo Básico</div> 

<?php
/* 
    Em PHP, um namespace é uma técnica que permite organizar classes, funções e constantes 
    em um conjunto lógico com um nome único, evitando conflitos de nome com outras partes 
    do código.

    O objetivo principal de um namespace é evitar conflitos de nomes de classe, função e 
    constante em projetos grandes ou em conjunto com outras bibliotecas e frameworks. Isso 
    permite que o desenvolvedor possa nomear seus elementos de código da forma que quiser sem 
    se preocupar com conflitos com outras partes do sistema.
*/
echo __NAMESPACE__ . '<br>';
const constante1 = 123;// dessa forma já define no proprio namescape
define('contexto\constante2', 234);// forma de definir constante no proprio namespace
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>';
// echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}


echo \contexto\soma(1, 4) . '<br>';
echo soma(10,1) . '<br>';


/* 
    Exemplo de um função criada no namespace que também existe na API do PHP
    Chamanda as duas funções 

*/
function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';// Do namespace contexto
echo \strpos('Texto genérico para busca', 'busca') . '<br>';// Da API PHP