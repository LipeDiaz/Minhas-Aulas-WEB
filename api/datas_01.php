<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';
/* 
    DOC PHP: date() — Formatar um timestamp Unix
        Retorna uma string de acordo com a string de formato informada usando o 
        inteiro timestamp (timestamp Unix) informado, ou a hora atual local se 
        nenhum timestamp for informado. Em outras palavras, o parâmetro timestamp 
        é opcional e padronizado para o valor de time(). 

    DOC PHP: time() — Retorna o timestamp Unix atual    
        Retorna a hora atual medida no número de segundos desde a Era 
        Unix (January 1 1970 00:00:00 GMT). 

    DOC PHP: setlocale() — Define informações locais
    
    DOC PHP: strtotime() — Interpreta qualquer descrição de data/hora em 
    texto em inglês em timestamp Unix

    DOC PHP: mktime() — Obtém um timestamp Unix de uma data
        Retorna o timestamp Unix correspondente aos argumentos informados. 
        Este timestamp é um inteiro longo contendo o número de segundos entre a 
        Era Unix (January 1 1970 00:00:00 GMT), e o tempo especificado.
        Argumentos podem ser omitidos da direita para esquerda; quaisquer 
        argumentos omitidos serão definidos para o valor atual de acordo com a 
        data e a hora local

*/

echo date('D, d \d\e M \d\e Y H:i A') . '<br>';
echo strftime('%A, %d de %B de %Y ', time()) . '<br>';
setlocale(LC_TIME, 'pt_br.utf-8');
echo strftime('%A, %d de %B de %Y ', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %G', $amanha)  . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %G', $proximaSemana)  . '<br>';

$dataFixa = mktime(11, 15, 0, 2, 11, 1999);
echo strftime('%d de %B de %Y %Hh %Mmn %Ss', $dataFixa)  . '<br>';