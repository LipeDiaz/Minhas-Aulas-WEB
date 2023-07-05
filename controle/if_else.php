<div class="titulo">If Else</div>

<?php 

if(1 > 0) { // Uma espressão que retorna "True" ou "False"
    echo "Serei impresso? <br>";
}

if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else if(false) {
    echo "Passo C<br>";
} else if(true) {
    echo "Passo D<br>";
} else {
    echo "Deu ruim!!";
}

