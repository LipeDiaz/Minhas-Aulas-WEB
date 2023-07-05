<div class="titulo">Escrever Arquivo</div>

<?php 
/* 
   fopen() — Abre um arquivo ou URL 
   fwrite() — Escrita binary-safe em arquivos
   fclose() — Fecha um ponteiro de arquivo aberto

   Modos:
      'w' 	Abre somente para escrita;  
      'a' 	Abre somente para escrita; coloca o ponteiro do 
      arquivo no final do arquivo
      'x' 	Cria e abre o arquivo somente para escrita;


*/

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "valor iniciarl\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo conteúdo');
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo," com novos valores\n");
fwrite($arquivo,"Adicionados em um outro momento\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');