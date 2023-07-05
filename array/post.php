<div class="titulo">$_POST</div>


<!-- 
    O name vai pro back and, vai ser 
    a chave.
 -->

<form action="#" method="post">
    Nome: <input type="text" name="nome"><br>
    Sobrenome: <input type="text" name="sobrenome"><br>
    <select name="estado">
        <option value="pa">Pará</option>
        <option value="rj">Rio de Janeior</option>
        <option value="bh">Belo Horizonte</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.3rem;
    }
</style>


<?php
$dados = array_merge($_GET, $_POST);

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>';
print_r($dados);

echo '<br>' . count($_POST);


