<div class="titulo">Ler Arquivo</div>

<?php 
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo "Bytes do arquivo: $tamanho" . '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
/* 
    fgets() — Lê uma linha de um ponteiro de arquivo
    fgetc() — Lê um caracter do ponteiro de arquivo
*/
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');

/* 
feof() — Testa pelo fim-de-arquivo (eof) em um ponteiro de arquivo
*/
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);


echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "Adicionado durante a leitura");
fclose($arquivo);

echo 'Fim!';

