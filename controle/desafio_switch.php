<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="paran">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > milha</option>
        <option value="milha-km">milha > km</option>
        <option value="metro-km">metro > km</option>
        <option value="km-metro">km > metro</option>
        <option value="cel-fah">celsius > fahrenheit</option>
        <option value="fah-cel">fahrenheit > celsius</option>
    </select>
    <!-- Pode usar das duas maneiras!! -->
    <button>Calcular</button>
    <!-- <input type="submit" value="Calcular"> --> 
</form>

<style>
    form > * {
        font-size: 1.5rem;
    }

</style>

<?php
/* --------------Meu Algoritimo--------------------------- */

/* 
    $paran = $_POST['paran'];
    $conversao = $_POST['conversao'];
    $result = '';

    switch($conversao){
        case 'km-milha':
            $result = $paran * 0.621371;
            echo "$result Milhas";
            break;
        case 'milha-km':
            $result = $paran * 1.60934;
            echo "$result Km";
            break;
        case 'metro-km':
            $result = $paran * 0.001;
            echo "$result Km";
            break;
        case 'km-metro':
            $result = $paran * 1000;
            echo "$result Metros";
            break;
        default:
            echo "Desculpa não consigo converter";
            
    }

*/

/* ---------------Fim do meu algoritimo!!------------------- */

/* ---------------Algoritimo resolvido da aula-------------- */
const FATOR_KM_MILHA = 0.621371; // Comum de criar nomes de constante "TUDO_EM_MAUSCULA_COM_UNDERLINE"
define('FATOR_METRO_KM', 1000); // Outra meneira de criar constantes 

/* 
    °F = (°C × 9/5) + 32 "Formula de conversão de Celsius para Fahrenheit"
    °C = (°F - 32) x 5/9 "Formula de conversão de Fahrenheit para Celsius"

*/

const FATOR_CEL_FAH = 1.8;


$paran = $_POST['paran'];
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $paran * FATOR_KM_MILHA;
        $mensagem = "$paran km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $paran / FATOR_KM_MILHA;
        $mensagem = "$paran Milha(s) = $distancia km(s) ";
        break;
    case 'metro-km':
        $distancia = $paran / FATOR_METRO_KM;
        $mensagem = "$paran Metro(s) = $distancia km(s) ";
        break;
    case 'km-metro':
        $distancia = $paran * FATOR_METRO_KM;
        $mensagem = "$paran km(s) = $distancia Metro(s) ";
        break;
/* --------------------Feito por mim----------------------- */
    /* case 'celsius-fahrenheit':
        $f = ($paran * 9/5) + 32;
        $mensagem = "$paran Cº = $f Fº";
        break;
    case 'fahrenheit-celsius':
        $c = ($paran - 32) * 5/9;
        $mensagem = "$paran Fº = $c Cº";
        break; */
/* --------------------Feito por mim----------------------- */
    case 'cel-fah':
        $conversao = $paran * FATOR_CEL_FAH + 32;
        $mensagem = "{$paran}º Celsius = {$conversao}º Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($paran - 32) / FATOR_CEL_FAH;
        $mensagem = "{$paran}º Fahrenheit = {$conversao}º Celsius";
        break;
    default:
        $mensagem = "Nehum valor calculado!";
}

echo "<p>$mensagem</p>";


