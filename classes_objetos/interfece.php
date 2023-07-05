<div class="titulo">Interfece</div>
<?php

/* 
    Em PHP, uma interface é uma espécie de "contrato" que 
    especifica um conjunto de métodos que uma classe 
    deve implementar. 
    OBS: 
    -> obrigatoriamente todas as interfaces em PHP precisam
    ter apenas os métodos, Essas interfaces não podem ter implementação
    tem apenas a definição do método.

    -> Esses métodos são públicos então você não tem como definir um 
    método privado de uma interface. Na verdade as interfaces por padrão 
    são públicas.

    -> Uma classe pode implementar várias interfaces assim como a interface 
    pode estender outra interface.
     
*/

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar(); 
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

/*  OBS:
    Uma interface pode extends multiplas interfaces mas 
    uma classe não pode extends multiplas classes.
*/

interface Felino {
    function correr();
}

Class Chachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!!";    
    }

    function latir(): string {
        return "Au Au";
    }

    function mamar() {
        return "Irei usar leite!!";
    }

    function correr() {
        return "vrunnnnn!";
    }
}

$animal = new Chachorro();
echo $animal->respirar(), "<br>";
echo $animal->latir(), "<br>";
echo $animal->mamar(), "<br>";
echo $animal->correr(), "<br>";

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Chachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);

/*  
    "instanceof" é um operador em PHP que permite verificar se um 
    objeto é uma instância de uma determinada classe ou de uma classe 
    que herda de uma classe específica.
*/



