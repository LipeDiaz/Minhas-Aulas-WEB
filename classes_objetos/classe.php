<div class="titulo">Primeira Classe</div>

<?php 
/* 
    A coversão de nomeclatura usado em classes em PHP
    é o PascalCase.
*/

class Cliente {
    //atributos
    public $nome = 'Felipe';
    public $idade = 24;
    /* 
        "PUBLIC" Quando um método ou propriedade é definido como "public", 
        significa que ele pode ser acessado de qualquer lugar no código, 
        dentro ou fora da classe.
    */

    public function apresentar() {
        echo "Nome: {$this->nome} <br> Idade: {$this->idade}";
        /* Pode utilizar o "return" também em vez "echo" */

        /* 
            A palavra-chave "this" que em português que dizer "Esse" é usada dentro de um método para se referir 
            ao objeto atual. Ela é usada para acessar as propriedades e 
            métodos desse objeto. Quando você usa "this->propriedade", 
            por exemplo, você está acessando a propriedade "propriedade" do 
            objeto atual.
        */
    }
}

$c1 = new Cliente();
/* 
    A palavra-chave "new" é usada em PHP para criar uma nova instância de 
    uma classe. Quando você usa "new", o PHP cria um novo objeto com base na 
    classe que você especificou e retorna uma referência para esse objeto.
*/
$c1->nome = "Diaz";
/* 
    O operador "->" é chamado de "operador de seta" ou "operador de acesso 
    de objeto". Ele é usado em PHP para acessar as propriedades e métodos 
    de um objeto.
*/
$c1->idade = 20;
$c1->apresentar();

echo '<br>';


