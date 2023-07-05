<div class="titulo">Class Data</div>

<?php


class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 11;
$aniversario->mes = 02;
$aniversario->ano = 1999;

$dataAtual = new Data(); // forma mais comum 
$dataAtual->dia = 25;
$dataAtual->mes = 03;
$dataAtual->ano = 2023;




echo $aniversario->apresentar() . '<br>';
echo $dataAtual->apresentar();

