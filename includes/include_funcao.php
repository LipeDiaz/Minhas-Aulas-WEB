<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregandoArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>'; // SO CONSIGO ACESSAR NESSE ESCOPO
    echo soma(2, 10) . '<br>'; //CONSIGO ACESSAR DENTRO E FORA DO ESCOPO 
}   

echo 'Novamente no arquivo include_funcao<br>';
//echo soma(1, 8) . '!<br>';
carregandoArquivo();

echo "Variável = '{$variavel}'."; //SO CONSIGO ACESSAR NO ESCOPO 'carregarArquivo()' EM QUE FIZ O INCLUDE 
//var_dump($variavel);

echo '<br>' . soma(10, 10); //CONSIGO ACESSAR FORA DO ESCOPO 'carregarArquivo()'