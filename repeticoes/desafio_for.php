<div class="titulo">Desafio Fer</div>

<!--  
    Usar o for...
    #
    ##
    ###
    ####
    ##### 
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
-->

<?php
/* 1) Pode usar incremento $i++ */
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

/* 2) Não pode usar incremento $i++ */
for($impre2 = '#'; $impre2 !== '######'; $impre2 .= '#') {
    echo "$impre2 <br> ";
}

/*  1) 
    Não conseguir fazer devido a lógica
    não lembrava de um simples operador que 
    mudou tudo ".=" (Operador para concatenar)
*/

