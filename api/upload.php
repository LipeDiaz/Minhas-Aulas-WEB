<div class="titulo">Upload</div>

<?php 
print_r($_FILES);
/* 
    $_FILES() — Variáveis de Upload de Arquivos HTTP
*/
if ($_FILES && $_FILES['arquivo']) {
    $pastaUpload = "/Users/Diaz/Desktop/UpTeste/";
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    /* 
        DOC PHP: move_uploaded_file() — Move um arquivo enviado para 
        uma nova localização

            Descrição:
            Esta função verifica para ter certeza de que o arquivo 
            designado por filename é um arquivo de upload válido 
            (que tenha sido enviado pelo mecanismo PHP de envio 
            por POST HTTP). Se o arquivo for válido, ele será 
            movido para o nome de arquivo dado por destination. 
    */

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    }else {
        echo "<br>Erro no Upload de arquivos!";
    }


}



?>

<form action="#" method="post" 
    enctype="multipart/form-data">
    <!-- 
        W3 Schools: Definição e Uso

        O enctype O atributo especifica como os dados do formulário devem 
        ser codificados quando enviando-o para o servidor.

        Nota: O enctypeatributo só pode ser usado se method="post". 

     -->
    <input name="arquivo"  type="file">
    <button>Enviar</button>    
</form>

<style>
    input, button {
        font-size: 2rem;
        margin-top: 20px;
    }
</style>

